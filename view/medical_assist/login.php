<?php
include '../../controller/medical_assist/logincontrol.php';
include '../../css/medical_assist/login_page.css';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
    <form method="POST" action="">
    <fieldset>
  <legend>Login to your Account:</legend>
        <tr>
            <td>Email: <input type="text" name = "email" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Password: <input type="password" name = "password" /></td>
        </tr>
        <br>
    
    <tr>
        <td><input type="submit" name = "Login" value="Login" /></td>
    </tr>
    
    </form>
</body>
</html>