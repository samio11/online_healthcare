<?php
include '../../controller/medical_assist/prescriptioncontrol.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/medical_assist/prescription_page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form method="POST" action="">
        <h1> Prescription Data Entry:</h1><br>

        <table>
            <tr>
                <td colspan="2">Patient Name:</td>
                <td><input type="text" name="PatientName" />
                    <?php echo $p_nameError; ?>
                    <?php echo $p_name; ?>
                </td>
            </tr>

            <tr>
                <td colspan="2">Patient Email:</td>
                <td><input type="text" name="PatientEmail" />
                    <?php echo $p_emailError; ?>
                    <?php echo $p_email; ?>
                </td>
            </tr>

            <tr>
                <td colspan="2">Gender:</td>
                <td><select name="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    <?php echo $p_genderError; ?>
                    <?php echo $p_gender; ?>
                </td>
            </tr>

            <tr>
            <tr>
                <td colspan="2">Height:</td>
                <td><input type="text" name="Height" />
                    <?php echo $heightError; ?>
                    <?php echo $height; ?>
                </td>

            </tr>

            <tr>
                <td colspan="2">Weight:</td>
                <td><input type="text" name="Weight" />
                    <?php echo $weightError; ?>
                    <?php echo $weight; ?>
                </td>

            </tr>

            <tr>
                <td colspan="2">Blood Group:</td>
                <td><input type="text" name="BloodGroup" />
                <?php echo $bgError; ?>
                <?php echo $bg; ?>
                </td>

            </tr>

            <tr>
                <td colspan="2">Diabetes:</td>
                <td><select name="Diabetes">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="NotSure">Not Sure</option>
                    </select>
                    <?php echo $diaError; ?>
                    <?php echo $dia; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Date Of Appointment:</td>
                <td><input type="date" name="appointment">
                    <?php echo $appdateError; ?>
                    <?php echo $appdate; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Appointed Doctor:</td>
                <td><input type="text" name="appointedDoc" />
                    <?php echo $d_nameError; ?>
                    <?php echo $d_name; ?>
            </td>
            </tr>

            <tr>
                <td colspan="2">Prescribed Medicines:</td>
                <td><textarea id="PrescribedMed" name="PrescribedMed" rows="4" cols="50"></textarea>
                    <?php echo $medError; ?>
                    <?php echo $med; ?>
            </td>
            </tr>

            <tr>
                <td colspan="2">Tests for Disease:</td>
               
                  <td><textarea id="diseaseTest" name="diseaseTest" rows="4" cols="50"></textarea>
                    <?php echo $testsError; ?>
                    <?php echo $tests; ?>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submitPrescription" value="Submit Prescription" /></td>
            </tr>
        </table>
    </form>
</body>

</html>