<?php
require 'script.php';

//datos para correo
$asunto = "Cotizacion de juguetes";

$textmail = "Hola! $usuario \n";
$textmail .= "Te envio la cotizacion, carro  hot wheels: $150 ";

//enviando correo
mail($mail, $asunto, $textmail);

?>