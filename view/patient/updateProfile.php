<?php session_start(); ?>
<html>
    <body>
        <h2>Update Profile Information</h2>
        <form method="POST" action=''>
        <table>
           <tr><td>Name </td><td><input type="text" name="updatedName" value=<?php echo $_SESSION['name'] ?>></td></tr>
           <tr><td>Phone </td><td><input type="text" name="updatedPhone" value=<?php echo $_SESSION['phone'] ?>></td></tr>
           <tr><td>Password </td><td><input type="text" name="updatedPass" value=<?php echo $_SESSION['password'] ?>></td></tr>
           <tr><td><input type="submit" name="cancel" value="Cancel"></td>
                <td><input type="submit" name="confirm" value="Confirm"></td></tr>
        </table>
        </form>
    </body>
</html>