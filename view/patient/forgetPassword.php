<?php include '../../controller/patient/forgetPasswordControl.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="" method="POST" onsubmit="return validateEmail()">
            <label for="first">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>           
            <div class="wrap"> <button type="submit" name="email_submit" id="email_submit" onclick="">Submit</button></div>
        </form>
    </div>
</body>
</html>
