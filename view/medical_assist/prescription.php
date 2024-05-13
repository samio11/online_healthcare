<?php
include '../../controller/medical_assist/update_prescontrol.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Prescription</title>
    <link rel="stylesheet" href="../../css/medical_assist/prescription_page.css">
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="../../js/medical_assist_myscript.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="main">
        <div id="receipt">
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
                                <option value="No">No</option>
                                <option value="Type A ">Type A </option>
                                <option value="Type B">Type B</option>
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
                        <td colspan="2">Time slot:</td>
                        <td><input type="text" name="Timeslot" />
                            <?php echo $stimeError; ?>
                            <?php echo $stime; ?>
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
                        <td><input type="text" name="presMed" value="<?php echo $_SESSION['prescribed']; ?>"></td>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">Tests for Disease:</td>
                        <td><input type="text" name="Tests" value="<?php echo $_SESSION['test']; ?>"></td>
                        </td>
                    </tr>
                </table>
        </div>
        <div class="wrap"> <button type="button" name="download" id="download" onclick="downloadPrescription()">Download Prescription</button>
            <input type="submit" name="submitPrescription" value="Submit Prescription" /> <br><br>
            <input type="submit" name="return" value="Homepage" />
        </div>


        </form>
    </div>
</body>

</html>