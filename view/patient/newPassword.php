<!DOCTYPE html>
<html>
<head>
    <title>New Password</title>
    <link rel="stylesheet" href="../../css/patient/forgetPasswordStyle.css">
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
<?php include '../../controller/patient/forgetPasswordControl.php'; ?>