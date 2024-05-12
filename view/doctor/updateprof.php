
<?php 
include '../../controller/doctor/updatecontrol.php';
//session_start(); 
?>
<head>
   
   
    <link rel="stylesheet" href="../../css/doctor/style.css">
</head>
<html>
    <body>
        <h1>Update Profile Information</h1>
        <div class="main">
        <form method="POST" action=''>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="updatedName" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="updatedPhone" value="<?php echo $_SESSION['pnumber']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="updatedPass" value="<?php echo $_SESSION['pass']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cancel" value="Cancel"></td>
                    <td><input type="submit" name="confirm" value="Confirm"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>

