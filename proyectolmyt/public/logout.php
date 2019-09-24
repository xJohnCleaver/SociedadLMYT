<?php
//Destruyo las cookies
setcookie("email", '', time()-3600,"/");
setcookie("password", '', time()-3600,"/");

session_start();

// descoloco todas la variables de la sesión
session_unset();

// Destruyo la sesión
session_destroy();


//Y me voy al inicio
header('Location: index4.html');

?>
