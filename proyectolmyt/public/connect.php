<?php

try {
	$ndb = "proyectolmyt";
	$dbuser = 'root';
	$dbpass = '';
	$params = 'mysql:host=localhost;dbname='.$ndb.';charset=utf8';
	$conexion = new PDO($params, $dbuser, $dbpass);
} catch (PDOException $e) {
	die('Error: ' . $e->getMessage());
}

?>