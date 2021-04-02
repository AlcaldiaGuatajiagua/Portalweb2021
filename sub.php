<?php  

// Campos
$sub = $_POST['sub'];
// Datos para el correo
$destinatario = "soft2320@gmail.com";
$asunto = "Suscripción a noticias";

$carta = "Enviado desde la página \n";
$carta .= "Correo: $sub \n";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>