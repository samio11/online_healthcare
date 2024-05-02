<?php
 include '../../model/doctor_db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';
session_start();
$otpError="";
if (isset($_REQUEST['email_submit'])) {
    $_SESSION['otp']  = rand(0000, 9999);
    $_SESSION['email']= $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->checkEmail($conObj, $_SESSION['email']);
    if ($result) {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'michael.faraday.190@gmail.com';
            $mail->Password = 'wjgsbnqosgveihzx';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('michael.faraday.190@gmail.com', " ", 0);
            $mail->addAddress($_SESSION['email']);
            $mail->isHTML(true);
            $mail->Subject = 'Verify';
            $mail->Body = 'Your otp is: ' . $_SESSION['otp'];
            $mail->send();
            header("Location: send_otp.php");
    }
    else echo "No account found";
}
if (isset($_REQUEST['otp_submit'])) {
    $_SESSION['user_otp'] = $_REQUEST['otp'];
    if ($_SESSION['user_otp'] == $_SESSION['otp'] && !empty($_SESSION['user_otp'])) {
        header("Location: new_password.php");
    }
    else  $otpError="Wrong OTP";
}
if(isset($_REQUEST['pass_submit'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->updatePassword($conObj, $_SESSION['email'], $_REQUEST['new_pass']);
        if($result==1)
        {
            echo "Successfully updated!";
            session_destroy();
        }
            else echo "Invalid";
}



