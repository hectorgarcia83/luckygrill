<?php

$post = [
    'nombre' => $_POST["nombre"],
    'fechaCumpleanos' => $_POST["fechaCumpleanos"],
    'mail'   => $_POST["mail"],
    'comentarios' => $_POST["comentarios"]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://www.kamilati.com/mailsSender/luckygrill.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

if($response == "OK"){
	$resp = ["success" => true];
}else{
	$resp = ["success" => false];
}

echo json_encode($resp);
?>