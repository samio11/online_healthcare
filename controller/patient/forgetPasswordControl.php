<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';
$email = '';
$otp = rand(0000, 9999);
if (isset($_REQUEST['otp'])) {
    $user_otp = $_REQUEST['otp'];
}
if (isset($_REQUEST['email_submit'])) {
    $email = $_REQUEST['email'];
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'michael.faraday.190@gmail.com';
    $mail->Password = 'wjgsbnqosgveihzx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('michael.faraday.190@gmail.com', " ", 0);
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Verify';
    $mail->Body = 'Your otp is: ' . $otp;
    $mail->send();
    header("Location: otp.php");
}
