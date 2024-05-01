<?php
include '../../controller/doctor/validation.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration Form</title>
    <script src="../../js/doctor_myscript.js"></script>
    <link rel="stylesheet" href="../../css/doctor/regstyle.css">

    
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
                    <td><div class="error"> <p id="fnameError"></p></div></td>
                </td>
                <td>
                    <input type="text" name="lname" id="lname">
                    <td><div class="error"> <p id="lnameError"></p></div></td>
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
            <td>Gender: </td>
            <tr>
        <td>
            <input type="radio" name="gender" id="gender" >Male 
            <input type="radio" name="gender" id="gender" >Female
            <input type="radio" name="gender" id="gender" >others
            <td><p id="genderError"></p></td>
            
           </tr>
           <tr>
                <td colspan="2"><br></td>
            </tr> 
            <tr>  
            <td>
              Speciality:
            </td>
        
            <td><select name="cat" id="cat" >
                
            <option disabled selected value> Select Category</option>
                <option value="Neurology">Neurology </option>
                <option value="Psychiatry">Psychiatry </option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Internal Medicine">Internal Medicine</option>
            </select>
            </td>
            <td><div class="error"> <p id="catError"></p></div></td>
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

