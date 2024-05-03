<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" href="../../css/doctor/style.css">
</head>
<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="" method="POST">
            <label for="first">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>           
            <div class="wrap"> <button type="submit" name="email_submit" id="email_submit">Submit</button></div>
        </form>
    </div>
</body>
</html>
<?php include '../../controller/doctor/forget_password.php'; ?>