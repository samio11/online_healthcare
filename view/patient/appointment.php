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
                    <td><label for="doctor">Doctor Name:</td><td> <?php echo $_SESSION['dname'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="cat"> Speciality: </td><td><?php echo $_SESSION['cat'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="time"> Time: </label></td>
                    <td></td>
                </tr>
            </table>
            
            
           
            <div class="wrap"> <button type="submit" name="login" id="login">Confirm</button></div>
        </form>

    </div>
</body>