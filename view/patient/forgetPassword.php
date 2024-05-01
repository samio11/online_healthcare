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
            <label for="first">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>           
            <div class="wrap"><input type="submit" value="Submit" name="email_submit"></div>
        </form>
    </div>
</body>
</html>
<?php include '../../controller/patient/forgetPasswordControl.php'; ?>