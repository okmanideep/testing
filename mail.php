<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mail Status</title>
</head>

<body>



<?php


$from = $_POST["from"];
$to = $_POST["to"];
$message = $_POST["message"];
$subject = $_POST["subject"];

//this is a path to PHP mailer class you have dowloaded

include("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // set mailer to use SMTP

$mail->Host = "smtp-auth.iitb.ac.in"; // specify main and backup server

$mail->Port = 25;

$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->SMTPSecure = "tls";

$mail->Username = "manideep2607"; // SMTP username

$mail->Password = "\$manideep"; // SMTP password

$mail->From = "$from"; //do NOT fake header.

$mail->FromName = "Saurabh Suryavanshi";

$mail->AddAddress("$to"); // Email on which you want to send mail

//$mail->AddReplyTo("Reply to Email ", "Support and Help"); //optional

$mail->IsHTML(true);

$mail->Subject = "$subject";

$mail->Body = "$message";

if(!$mail->Send())

{

echo $mail->ErrorInfo;

}else{

echo "email was sent";

}

?>


</body>
</html>