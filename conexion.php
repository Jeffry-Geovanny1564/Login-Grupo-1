<?php

$servidor = "127.0.0.1:33065"; //servidor de la empresa
$baseDatos = "SISTEM_UMG"; //nombre de la base de datos
$usuario = "root"; //usuario
$clave = ""; //password
$conn = mysqli_connect($servidor, $usuario, $clave, $baseDatos);

//try catch

try {

	$conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $clave);
	echo "conectado";
} catch (Exception $ex) {
	echo $ex->getMessage();
}
?>