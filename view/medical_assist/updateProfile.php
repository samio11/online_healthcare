<?php
include '../../controller/medical_assist/updatecontrol.php';
include '../../css/medical_assist/update_profile_page.css';
?>

<html>
    <body>
        <h2>Profile Update</h2>
        <form method="POST" action=''>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="updatedName" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="updatedPhone" value="<?php echo $_SESSION['phone']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="updatedPassword" value="<?php echo $_SESSION['password']; ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="updatedAddress" value="<?php echo $_SESSION['address']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cancel" value="Cancel"></td>
                    <td><input type="submit" name="confirm" value="Confirm"></td>
                </tr>
            </table>
        </form>
    </body>
</html>


