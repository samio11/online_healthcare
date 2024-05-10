<?php
include '../../controller/doctor/assistControl.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment List</title>
  
    <script src="../../js/doctor_myscript.js"></script>
</head>
<body>
<form method="POST" action="" >

<h2 >Pending Appointment List</h2>
    <table border="1">
        <tr>
            <th>Assistant Id</th>
            <th>Name</th>
            <th>Note</th>
            
           
            <th>Action</th>
        </tr>
        
        <?php foreach ($assistData as $assist): ?>
        <tr>
            <td><?php echo $assist['ma_id']; ?></td>
            <td><?php echo $assist['name']; ?></td>
          
         </tr>
        <?php endforeach; ?>
    </table>    

</form>
   

</body>
</html>