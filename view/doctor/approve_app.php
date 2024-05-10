<?php
include '../../controller/doctor/appcontrol.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/doctor/style.css">
    <title>Document</title>
</head>
<body>
<div class="main">
        <h1>Appointment Time Set</h1>
        <form action="" method="POST" >
            <label for="first">Appointment ID:</label>
           
            <input type="text" id="app_id" name="app_id" placeholder="Enter doctor id" >  
            <label for="first">Patient id:</label>
            <input type="text" id="p_id" name="p_id" placeholder="Enter patient id" >  
            <label for="first">Time:</label>   
            <input type="text" id="stime" name="stime" placeholder="Enter appointment time" >       
            <div class="wrap"> <button type="submit" name="approve" id="approve">Approve</button></div>
        </form>
    </div>
</body>
</html>