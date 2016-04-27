<?php 
date_default_timezone_set('America/Mazatlan');

$nombre = $_POST["nombre"];
$fechaCumpleanos = $_POST["fechaCumpleanos"];
$mail = $_POST["mail"];
$comentarios = $_POST["comentarios"];

$to = "joanhy.grupoalbertos@gmail.com";
$subject = "Contacto Lucky Grill";
$body = "Una persona ha solicitado información desde el sitio web.";
$body .= "<br><strong>Nombre: </strong>$nombre";
$body .= "<br><strong>Fecha de Cumpleaños: </strong>$fechaCumpleanos";
$body .= "<br><strong>Mail: </strong>$mail";
$body .= "<br><strong>Comentarios: </strong>$comentarios";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= "From: noreply@luckygrill.mx\r\n";

if(mail($to,$subject,$body,$cabeceras)){
	$response = ["success" => true];
}else{
	$response = ["success" => false];
}

echo json_encode($response);
?>