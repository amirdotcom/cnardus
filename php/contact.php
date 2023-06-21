
<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

 $mail->isSMTP();
 $mail->SMTPAuth = true;


$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Post = 587;

$mail->Username = "amirabdulaziz@gmail.com";
$mail->Password = "enot2111";

$mail->setFrom($email, $name);
$mail->addAddress("amirabdulaziz01@gmail.com", "Amir");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: /contact.html");



