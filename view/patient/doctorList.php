<?php include "homepage.php"  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor's List</title>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<body>
    <div class="main">
        <h1>Doctor's List</h1>
        <table>
            
        
        <tr>
                <th>Name</th>
                <th>Speciality</th>
                <th>License</th>
                <th>Workplace</th>
                </tr>
            
            
        <?php include "../../controller/patient/doctorListControl.php" ?>
        </table>
        
    </div>
</body>