<?php
include '../../controller/medical_assist/update_prescontrol.php';
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
    <h1 style=" color: rgb(58, 48, 130);">Update Prescription</h1>

        <table>
        <tr>
                <td colspan="2">Presc. ID:</td>
                <td><input type="text" name="presID" value="<?php echo $_SESSION['pres_id']; ?>"></td>
                </td>
            </tr>
            <tr>
                <td colspan="2">Appoint. ID:</td>
                <td><input type="text" name="appoID" value="<?php echo $_SESSION['app_id']; ?>"></td>
                </td>
            </tr>
            <tr>
                <td colspan="2">Patient. ID:</td>
                <td><input type="text" name="patID" value="<?php echo $_SESSION['p_id']; ?>"></td>
                </td>
            </tr>
            <tr>
                <td colspan="2">Patient Name:</td>
                <td><input type="text" name="patientName" />
                </td>
            </tr>

            <tr>
                <td colspan="2">Patient Email:</td>
                <td><input type="text" name="PatientEmail" />
                </td>
            </tr>

            <tr>
                <td colspan="2">Gender:</td>
                <td><select name="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </td>
            </tr>

            <tr>
            <tr>
                <td colspan="2">Height:</td>
                <td><input type="text" name="Height" />
                </td>

            </tr>

            <tr>
                <td colspan="2">Weight:</td>
                <td><input type="text" name="Weight" />
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
                        <option value="No">No</option>
                        <option value="Type A ">Type A </option>
                        <option value="Type B">Type B</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">Date Of Appointment:</td>
                <td><input type="date" name="appointment">
                </td>
            </tr>
            <tr>
            <td colspan="2">Time slot:</td>
            <td><input type="text" name="Timeslot" />        
             </td>
            </tr>
            <tr>
                <td colspan="2">Appointed Doctor:</td>
                <td><input type="text" name="appointedDoc" />
            </td>
            </tr>

            <tr>
                <td colspan="2">Prescribed Medicines:</td>
                <td><input type="text" name="presMed" value="<?php echo $_SESSION['prescribed']; ?>"></td>
            </td>
            </tr>

            <tr>
                <td colspan="2">Tests for Disease:</td>
                <td><input type="text" name="presMed" value="<?php echo $_SESSION['test']; ?>"></td>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submitPrescription" value="Submit Prescription" /> <br>
                <input type="submit" name="return" value="Homepage" /></td>
            </tr>
        </table>
    </form>
</body>

</html>