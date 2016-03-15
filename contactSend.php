<?php 
$nombre = $_POST["nombre"];
$fechaCumpleanos = $_POST["fechaCumpleanos"];
$mail = $_POST["mail"];
$comentarios = $_POST["comentarios"];

$response = ["success" => false];
echo json_encode($response);
?>