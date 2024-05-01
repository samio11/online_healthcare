<?php
include '../../controller/doctor/loginControl.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/logstyle.css">
</head>
<body>
    <form method="POST" action="">
        <div class="error"><?php echo $emailError; ?></div>
        <input type="email" name="email"  value="<?php echo $email; ?>" />
        <div class="error"><?php echo $passError; ?></div>
        <input type="password" name="pass" id="pass"  value="<?php echo $pass; ?>" />
        <input type="submit" name="Submit" value="Login" />
    </form>
</body>
</html>




