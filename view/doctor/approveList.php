<?php
include '../../controller/doctor/approveList_control.php';
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




    <h1>Appointment Approved List</h1>
    <table border="1">
        <tr>
            <th>Appointment Id</th>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Gender</th>
            <th>Appointed Time </th>
            <th>Patient Note</th>

           
        </tr>
        
        <?php foreach ($approvedData as $approve): ?>
        <tr>
            <td><?php echo $approve['app_id']; ?></td>
            <td><?php echo $approve['p_id']; ?></td>
            <td><?php echo $approve['p_name']; ?></td>
            <td><?php echo $approve['p_gender']; ?></td>
            <td><?php echo $approve['stime']; ?></td>
            <td><?php echo $approve['note']; ?></td>
            <td><button type="submit" name="message" value="<?php echo $approve['app_id'] ?>">Message</button></td>
            
             
           
      </tr>
        <?php endforeach; ?>
    </table>    

</form>
   

</body>
</html>

