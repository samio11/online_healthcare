<?php
include '../../controller/doctor/assistControl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment List</title>
    <link rel="stylesheet" href="../../css/doctor/senddoc.css">
   
</head>
<body>
<div class="wrap">

<form method="POST" action="" >

<h2 >Assistant List</h2>
    <table border="1">
        <tr>
            <th>Assistant Id</th>
            <th>Name</th>
        
           
           
            <th>Action</th>
        </tr>
        
        <?php foreach ($assistData as $assist): ?>
        <tr>
            <td><?php echo $assist['ma_id']; ?></td>
            <td><?php echo $assist['name']; ?></td>
            <td><button type="submit" name="doc" id="doc">Send documents</button></td>
         </tr>
        <?php endforeach; ?>
    </table>    

</form>
   

</body>
</div>

</html>