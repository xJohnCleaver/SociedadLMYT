<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "dookcl_origin";
 $tbl_name = "user_access";

$usuario=$_POST['email'];

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}


$buscarUsuario="SELECT * FROM user_access WHERE email='$usuario' ";

$resultado = mysqli_query($conexion, $buscarUsuario);

$count=mysqli_num_rows($resultado);

if($count>0){
	echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
	echo "<a href='index4.html'>Por favor escoga otro Nombre</a>";

}else {
	$form_pass = $_POST['password'];
	//$hash = password_hash($form_pass, PASSWORD_BCRYPT);
	$query = "INSERT INTO user_access (nombres,apellidos,email, password)
           VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[email]', '$form_pass')";

	if ($conexion->query($query) === TRUE) {
		echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
		echo "<h4>" . "Bienvenido: " . $_POST['nombres'] . "</h4>" . "\n\n";
		echo "<h5>" . "Hacer Login: " . "<a href='index4.html'>Login</a>" . "</h5>";

	}else {
	
		echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
	}
 }
 
 mysqli_close($conexion);

?>
