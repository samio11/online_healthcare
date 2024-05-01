<?php include '../../controller/patient/forgetPasswordControl.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>GeeksforGeeks Registration</title>
    <link rel="stylesheet" href="../../css/patient/forgetPasswordStyle.css">
</head>
<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="" method="POST">
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp" placeholder="Enter your OTP" required>
            
            <div class="wrap"><input type="submit" value="Submit" name="otp_submit"></div>
        </form>
    </div>
</body>
</html>
