<?php
include '../../controller/doctor/appcontrol.php';
include '../../controller/doctor/chatSessionControl.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment List</title>
    <link rel="stylesheet" href="../../css/doctor/appointment.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/doctor_myscript.js"></script>
   
</head>
<body>
<form method="POST" action="" >

<h1 >Pending Appointment List</h1>
<input type="text" id="live_search" placeholder="Search here" onkeyup="liveSearch(this.value)">
    <table border="1">
        <tr>
            <th>Appointment Id</th>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Gender</th>
            <th>Request Time Slot</th>
            <th>Patient Note</th>
           
            <th>Action</th>
        </tr>
      
        <tbody id="searchresult">
           <?php echo $str ?>
        </tbody> 

        <?php foreach ($appointmentData as $appointment): ?>
        <tr>
            <td><?php echo $appointment['app_id']; ?></td>
            <td><?php echo $appointment['p_id']; ?></td>
            <td><?php echo $appointment['p_name']; ?></td>
            <td><?php echo $appointment['p_gender']; ?></td>
            <td><?php echo $appointment['time']; ?></td>
            <td><?php echo $appointment['note']; ?></td>
            <td>
             
            <button type="submit" name="set_time" id="set_time">Set Time</button>
           
          
            <button type="submit" name="decline" value="<?php echo $appointment['app_id'];?>">Decline</button>
            </td>
      </tr>
        <?php endforeach; ?>
    </table>


  

</form>
   

</body>
</html>

