<?php include '../../controller/doctor/loginControl.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Doctor Portal Login</title>
    <link rel="stylesheet" href="../../css/doctor/style.css">
</head>

<body>
    
    <div class="main">
        <h1>Doctor Portal</h1>
        <h3>Enter your login credentials</h3>
        <form action=""  mathod="POST">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            <label for="pass"> Password: </label>
            <input type="password" id="pass" name="pass" placeholder="Enter your Password" required>
            <div class="wrap"> <button type="submit" name="login" id="login">Login</button></div>
        </form>
        <a href="forgetPass.php" style="text-decoration: none;"> Forgot password? </a>
        <p>Not registered?<a href="patientReg.php" style="text-decoration: none;"> Create an account </a></p>

    </div>

</body>

</html>




