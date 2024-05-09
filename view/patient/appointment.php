<!DOCTYPE html>
<html>

<head>
    <?php include '../../controller/patient/appointmentControl.php' ?>
    <title>Apointments</title>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <div class="main">
        <h1>Apointment Information</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td colspan="3">
                        <h3>Patient's Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="pname">Patient Name:</td>
                    <td colspan="2"> <?php echo $_SESSION['patientName'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender"> Gender: </td>
                    <td colspan="2"><?php echo $_SESSION['patientGender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="add"> Address: </td>
                    <td colspan="2"><?php echo $_SESSION['patientAddress'] ?></label></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <h3>Doctor's Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="doctor">Doctor Name:</td>
                    <td colspan="2"> <?php echo $_SESSION['dname'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender"> Gender: </td>
                    <td colspan="2"><?php echo $_SESSION['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="cat"> Speciality: </td>
                    <td colspan="2"><?php echo $_SESSION['cat'] ?></label></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h3>Additional Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="time"> Time: </label></td>
                    <td colspan=""><select name="time" id="time">
                            <option name="10AM-12PM">10AM-12PM</option>
                            <option name="4PM-6PM">4PM-6PM</option>
                            <option name="8PM-10PM">8PM-10PM</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="note">Special Note:</label> </td>
                    <td><textarea id="note" name="note" rows="2" cols="50" placeholder="Write here..."></textarea></td>

                </tr>
            </table>




            <div class="wrap"> <button type="submit" name="confirm" id="cinfirm">Confirm</button></div>
        </form>

    </div>
</body>