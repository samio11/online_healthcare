<?php
include '../../controller/doctor/assistControl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment List</title>
    <link rel="stylesheet" href="../../css/doctor/Senddoc.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/doctor_myscript.js"></script>
</head>
<body>
<div class="wrap">

<form method="POST" action="" >

<h2 >Assistant List</h2>
<input type="text" id="live_search" placeholder="Search here" onkeyup="liveSearchAssist(this.value)">
    <table border="1">
        <tr>
            <th>Assistant Id</th>
            <th>Name</th>
        
           
           
            <th>Action</th>
        </tr>
        <tbody id="searchresult">
           <?php echo $str ?>
           </tbody>
        
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