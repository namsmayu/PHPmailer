<?php
require 'C:/Apache24/htdocs/PHPMailer-master/src/PHPMailer.php';
require 'C:/Apache24/htdocs/PHPMailer-master/src/SMTP.php';
require 'C:/Apache24/htdocs/PHPMailer-master/src/Exception.php';

phpinfo();

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'namrata.londhe9@gmail.com';          // SMTP username
$mail->Password = 'Shonu2018'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('info@example.com', 'Namrata');
$mail->addReplyTo('info@example.com', 'Namrata');
$mail->addAddress('nams_ashok@hotmail.com');   // Add a recipient


$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost by Namrata</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Namrata</b></p>';

$mail->Subject = 'Email from Localhost by Namrata';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>