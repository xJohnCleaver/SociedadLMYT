<?php

require("connect.php");
session_start();

if(isset($_POST["email"]) and isset($_POST["pass"])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
}
//echo $email;
//echo $password;

$sql = "SELECT * FROM user_access WHERE email = :email AND password = :pass";

try{
  $result = $conexion->prepare($sql);
  $result->bindValue(":email",$email,PDO::PARAM_STR);
  $result->bindValue(":pass",$password,PDO::PARAM_STR);
  $result->execute();
} 
catch(PDOException $ex){
  echo $ex->geMessage();
}

if($result->rowCount()>0){//si hubo un resultado (lo habrá solo cuando coincidan el email y contraseña)
  $row = $result->fetchAll(PDO::FETCH_ASSOC);
  if(isset($_POST['recordar'])){
    setcookie("email", $_POST['email'], time()+3600,"/");
    setcookie("password", $_POST['password'], time()+3600,"/");
  }
	$_SESSION['loggedin'] = true;
  $_SESSION['id'] = $row[0]['id'];  
  $_SESSION['nombres'] = $row[0]['nombres'];
  $_SESSION['apellidos'] = $row[0]['apellidos'];
  $_SESSION['email'] = $row[0]['email'];
  $_SESSION['password'] = $row[0]['password'];
  $_SESSION['rango'] = $row[0]['rango'];
  $_SESSION['estado_cuenta'] = $row[0]['estado_cuenta'];
	$_SESSION['start'] = time();
  $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);

	echo '<script type="text/javascript">
	window.location.assign("home.php");
	</script>';
 }else {
	echo '<script type="text/javascript">
  alert("Correo '.$email.' o contraseña '.$password.' incorrecta.");
  window.location.assign("index4.html");
	</script>';
}

 ?>