<?php
include '../../controller/doctor/docucontrol.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Medication</title>
    <link rel="stylesheet" href="../../css/doctor/style.css">
</head>

<body>
    
    <div class="main">
        <h1>Medication</h1>
        
        
        <form action=""  method="POST">
            <label for="app_id">Appointment Id: </label>
            <input type="text" id="app_id" name="app_id" placeholder="Enter appointment id" required>
            <label for="p_id"> Patient Id: </label>
            <input type="text" id="p_id" name="p_id" placeholder="Enter id" required>
            <label for="text"> Prescribe Medicine: </label>
           
            <textarea name="prescribed" id="prescribed" rows="7" ></textarea>
            <label for="text"> Prescribe test: </label>
           
           <textarea name="test" id="test" rows="7" ></textarea>
            <div class="wrap"> <button type="submit" name="submit" id="submit">send</button></div>
        </form>
       

    </div>

</body>

</html>




