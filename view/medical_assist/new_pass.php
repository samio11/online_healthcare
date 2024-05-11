
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../css/medical_assist/new_pass_page.css">
    <title>Password Reset</title>
</head>
<body>
    <div class="main">
        <h1>New Password</h1>
        <form action="" method="POST">
            <label for="first">Password </label>
            <input type="text" id="new_pass" name="new_pass" placeholder="Enter your new Password" required>           
            <div class="wrap"><input type="submit" value="Update Password" name="pass_submit"></div>
        </form>
    </div>
</body>
</html>
<?php include '../../controller/medical_assist/forget_passcontrol.php'; ?>