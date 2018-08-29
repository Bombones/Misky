<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$compañia = $_POST['compañia'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su Telefono es: " . $telefono . " \r\n";
$mensaje .= "De la compañia: " . $compañia . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'majubrenda15@gmail.com';
$asunto = 'Mensaje de mi sitio web BOMBONES MISKY';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>