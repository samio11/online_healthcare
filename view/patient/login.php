<?php include '../../controller/patient/loginControl.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Patient Portal Login</title>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    
    <div class="main">
        <h1>Patient Portal</h1>
        <h3>Enter your login credentials</h3>
        <form action=""  mathod="POST">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            <label for="password"> Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            <div class="wrap"> <button type="submit" name="login" id="login">Login</button></div>
        </form>
        <a href="forgetPassword.php" style="text-decoration: none;"> Forgot password? </a>
        <p>Not registered?<a href="patientReg.php" style="text-decoration: none;"> Create an account </a></p>

    </div>

</body>

</html>