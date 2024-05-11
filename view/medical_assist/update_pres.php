<?php
include '../../controller/medical_assist/pres_updatecontrol.php';
?>

<html>
    <body>
        <link rel="stylesheet" href="../../css/medical_assist/update_profile_page.css">
        <h2>Profile Update</h2>
        <form method="POST" action=''>
            <table>
                <tr>
                    <td>Patient's Name</td>
                    <td><input type="text" name="updatedP_Name" value="<?php echo $_SESSION['p_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Patient's Email</td>
                    <td><input type="text" name="updatedEmail" value="<?php echo $_SESSION['p_email']; ?>"></td>
                </tr>
                <tr>
                    <td>Appointment Date</td>
                    <td><input type="text" name="updatedAppoDate" value="<?php echo $_SESSION['appdate']; ?>"></td>
                </tr>
                <tr>
                    <td>Doctor's Name</td>
                    <td><input type="text" name="updatedD_Name" value="<?php echo $_SESSION['d_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Medications</td>
                    <td><input type="text" name="updatedMed" value="<?php echo $_SESSION['med']; ?>"></td>
                </tr>
                <tr>
                    <td>Given Tests</td>
                    <td><input type="text" name="updatedTests" value="<?php echo $_SESSION['tests']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cancel" value="Cancel"></td>
                    <td><input type="submit" name="confirm" value="Confirm"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
