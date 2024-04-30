<?php
include '../control/validation.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration Form</title>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/regstyle.css">

    
</head>
<body>
    <form method="POST" action="" onsubmit="return validateForm()">
        <h1>Doctor Registration Form</h1>
        <table>
            <tr>
                <td>First Name:</td>
                <td>Last Name:</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="fname" id="fname">
                    <div class="error"><?php echo $fnameError; ?></div>
                </td>
                <td>
                    <input type="text" name="lname" id="lname">
                    <div class="error"><?php echo $lnameError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" id="email">
                    <div class="error"><?php echo $emailError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Phone number:</td>
                <td>
                    <input type="text" name="pnumber" id="pnumber">
                    <div class="error"><?php echo $pnumberError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Licence number:</td>
                <td>
                    <input type="text" name="lnumber" id="lnumber">
                    <div class="error"><?php echo $lnumberError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Current workplace:</td>
                <td>
                    <textarea name="place" id="place" rows="5"></textarea>
                    <div class="error"><?php echo $placeError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="pass" id="pass">
                    <div class="error"><?php echo $passError; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td>Agreeing to comply with the healthcare policies and regulations</td>
                <td><input type="checkbox" name="agree"></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="SUBMIT"></td>
            </tr>
        </table>
    </form>
</body>
</html>
