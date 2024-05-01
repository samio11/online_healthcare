<html>
    <head>
    <link rel="stylesheet" href="../css/loginStyle.css">
    </head>
    <body>
        <form method="POST" action="">
            <table>
                <tr><td>Enter Email:</td><td><input type="text" name="email" ></td></tr>
               <tr ><td><input type='submit' name='send' value='Send Code'></td></tr>
            </table>
        </form>
    </body>
</html>
<?php include '../controller/loginControl.php'; ?>