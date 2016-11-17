<?php
/**
 * Created by PhpStorm.
 * User: mati
 * Date: 10/18/16
 * Time: 3:03 PM
 */
$data = json_decode(file_get_contents("php://input"));
$from = $data -> email;
$subject = "Contacto de " . $data -> name;
$message = "Teléfono de Contacto: " . $data -> phone . " Mensaje: " . $data -> message;
$mail = mail("mads.solutions@gmail.com",$subject,$message,$from);
if($mail)
    echo "Email enviado";
else
    echo "error al enviar mail";