<?php
include '../controller/logincontrol.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
    <fieldset>
  <legend>Login Now!:</legend>
        <tr>
            <td>Email: <input type="text" name = "Email" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Password: <input type="password" name = "Password" /></td>
        </tr>
        <br>
    
    <tr>
        <td><input type="submit" name = "Submit" value="Login" /></td>
    </tr>
    
    </form>
</body>
</html>