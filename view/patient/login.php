<html>
    <head>
    <link rel="stylesheet" href="../css/loginStyle.css">
    </head>
    <body>
        <form method="POST" action="">
            <table>
                <tr><td>Email:</td><td><input type="text" name="email" ></td></tr>
                <tr><td>Password</td><td><input type="text" name= "password" ></td></tr>
                <tr ><td><input type='submit' name='login' value='Login'></td></tr>
            </table>
        </form>
    </body>
</html>
<?php include '../controller/loginControl.php'; ?>