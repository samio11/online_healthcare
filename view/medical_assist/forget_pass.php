<?php 
include '../../controller/medical_assist/forget_passcontrol.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <script src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/forg_pass_page.css">
</head>
<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="" method="POST" onsubmit="return validateEmail()">
            <label for="first">Email:</label>
            <input type="text" id="submit_email" name="email" placeholder="Enter Registered Email" required>  
            <label for="error"><p id="email_error"></p></label>         
            <div class="wrap"> <button type="submit" name="email_submit" id="email_submit">Submit</button></div>
        </form>
    </div>
</body>
</html>