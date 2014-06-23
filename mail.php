<?php
require_once "vendor/autoload.php";
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'user@example.com';                 // SMTP username
//$mail->Password = 'secret';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@gofrabag.com.ua';
$mail->FromName = 'Gofra';    // Add a recipient
$mail->addAddress('y0rsh747@gmail.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->CharSet = "utf-8";
$mail->Subject = "Заявка";
$mail->Body    = "<b>Имя:</b>" . $_POST['name'] . "<br>";
if (isset($_POST['phone'])) $mail->Body .= "<b>Телефон:</b>" . $_POST['phone'] . "<br>";
if (isset($_POST['mail'])) $mail->Body .= "<b>Почта:</b>" . $_POST['mail'] . "<br>";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}