<?php
include '../../controller/medical_assist/forget_passcontrol.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" href="../../css/medical_assist/otp_page.css">
</head>
<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="" method="POST">
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp" placeholder="Enter your OTP" required>
            <p class="wrap"><?php echo $otpError ?></p>
            <div class="wrap"><input type="submit" value="Submit" name="otp_submit"></div>
        </form>
    </div>
</body>
</html>