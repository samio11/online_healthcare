<?php 
include '../controller/updateControl.php';
 ?>
<html>
    <body>
        <h2>Update Profile Info: </h2>
        <form method="POST" action=''>
        <table>
           <tr><td>Name </td><td><input type="text" name="updatedName" value=<?php echo $_SESSION['Name'] ?>></td></tr>
           <tr><td>Password </td><td><input type="password" name="updatedPassword" value=<?php echo $_SESSION['Password'] ?>></td></tr>
           <tr><td>Phone number </td><td><input type="text" name="updatedPhoneNumber" value=<?php echo $_SESSION['Phonenumber'] ?>></td></tr>
           <tr><td>Nation </td><td><input type="text" name="updatedNation" value=<?php echo $_SESSION['Nationality'] ?>></td></tr>
           <tr><td><input type="submit" name="cancel" value="Cancel"></td>
                <td><input type="submit" name="confirm" value="Confirm Changes"></td></tr>
        </table>
        </form>
    </body>
</html>

