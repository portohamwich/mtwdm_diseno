<?php

$nombre = $_POST['txtNombre'];
$correo = $_POST['txtEmail'];
$asunto = "comentario";
$mensaje = $_POST['txtMensaje'];

$destino = "rexxiiss@gmail.com";
$comentario="
	Nombre: $nombre
	Email: $correo
	Comentario: $mensaje

";

$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers = 'From: '.$_POST['txtEmail']."\r\n".
    'Reply-To:'.$destino."\r\n".
    'X-Mailer: PHP/'.phpversion();


if(mail($destino, $asunto, $comentario,$headers))
{
    echo "Mensaje Enviado";
}

else
{
    echo "Error";
}



?>