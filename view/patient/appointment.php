<!DOCTYPE html>
<html>
<head>
    <?php include '../../controller/patient/appointmentControl.php' ?>
    <title>Apointments</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<body>
<div class="main">
        <h1>Apointment Information</h1>
        <form action=""  method="POST">
            <table>
                <tr>
                    <td><label for="doctor">Doctor Name:</td>
                    <td colspan="2"> <?php echo $_SESSION['dname'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="cat"> Speciality: </td>
                    <td colspan="2"><?php echo $_SESSION['cat'] ?></label></td>
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
                    <td><label for="note">Special Note(optional):</label> </td>
                    <td><textarea id="note" name="note" rows="2" cols="50" placeholder="Write here..."></textarea></td>
                    
                </tr>
            </table>
            
            
           
            <div class="wrap"> <button type="submit" name="confirm" id="cinfirm">Confirm</button></div>
        </form>

    </div>
</body>