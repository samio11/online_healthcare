<?php
include '../../controller/medical_assist/prescriptioncontrol.php';
include '../../css/medical_assist/prescription_page.css';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form method="POST" action="">
        <h1> Portfolio Data Entry:</h1><br>

        <table>
            <tr>
                <td colspan="2">Patient Name:</td>
                <td><input type="text" name="PatientName" />
                    <?php echo $nameError; ?>
                </td>
            </tr>

            <tr>
                <td colspan="2">Patient Email:</td>
                <td><input type="text" name="PatientEmail" />
                    <?php echo $emailError; ?>
                </td>
            </tr>

            <tr>
                <td colspan="2">Gender:</td>
                <td><select name="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    <?php echo $genderselectError; ?>
                </td>
            </tr>

            <tr>
            <tr>
                <td colspan="2">Height:</td>
                <td><input type="text" name="Height" />
                    <?php echo $heightError; ?>
                </td>

            </tr>

            <tr>
                <td colspan="2">Weight:</td>
                <td><input type="text" name="Weight" />
                    <?php echo $weightError; ?>
                </td>

            </tr>

            <tr>
                <td colspan="2">Blood Group:</td>
                <td><input type="text" name="BloodGroup" />

                </td>

            </tr>

            <tr>
                <td colspan="2">Diabetes:</td>
                <td><select name="Diabetes">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="NotSure">Not Sure</option>
                    </select>
                    <?php echo $diabetesError; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Date Of Appointment:</td>
                <td><input type="date" name="appointment">
                    <?php echo $appointmentError; ?>
                    <?php echo $appointment; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Appointed Doctor:</td>
                <td><input type="text" name="appointedDoc" />
                    <?php echo $appoinDocError; ?>
                    <?php echo $appoinDoc; ?>
            </td>
            </tr>

            <tr>
                <td colspan="2">Prescribed Medicines:</td>
                <td><input type="text" name="PrescribedMed" />
                    <?php echo $prescMedError; ?>
                    <?php echo $prescMed; ?>
            </td>
            </tr>

            <tr>
                <td colspan="2">Tests for Disease:</td>
               
                  <td><textarea id="diseaseTest" name="diseaseTest" rows="4" cols="50"></textarea>
                    <?php echo $diseasetestError; ?>
                    <?php echo $diseasetest; ?>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submitPrescription" value="Submit Prescription" /></td>
            </tr>
        </table>
    </form>
</body>

</html>