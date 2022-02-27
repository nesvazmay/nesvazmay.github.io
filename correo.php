<?php 
$myemail = '17041469@itdurango.edu.mx';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "Mensaje de pagina web Nesvazmay";

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Has recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

@mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se envio correctamente";






?>