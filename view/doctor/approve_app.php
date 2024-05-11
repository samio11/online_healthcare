<?php
include '../../controller/doctor/approvecontrol.php';

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
           
            <td><input type="text" name="app_id" value="<?php echo $_SESSION['app_id']; ?>"></td> 
            <label for="first">Patient id:</label>
            <td><input type="text" name="p_id" value="<?php echo $_SESSION['p_id']; ?>"></td> 
            <label for="first">Time:</label>   
            <input type="text" id="stime" name="stime" placeholder="Enter appointment time" >       
            <div class="wrap"> <button type="submit" name="approve" id="approve">Approve</button></div>
        </form>
    </div>
</body>
</html>