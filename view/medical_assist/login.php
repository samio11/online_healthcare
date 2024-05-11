<?php
include '../../controller/medical_assist/logincontrol.php';
include '../../css/medical_assist/login_page.css';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Medical Assist Portal Login</title>
</head>

<body>
    
    <div class="main">
        <h1>Medical Assist Portal</h1>
        <form action=""  mathod="POST">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            <label for="password"> Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            <div class="wrap"> <button type="submit" name="login" id="login">Login</button></div>
        </form>
        <a href="forget_pass.php" style="text-decoration: none;"> Forgot password? </a>
        <p>Not Registered?<a href="ma_reg.php" style="text-decoration: none;"> Register Now! </a></p>

    </div>

</body>

</html>