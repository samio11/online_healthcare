<?php include "homepage.php"  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor's List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<body>
    <div class="main">
        <h1>Doctor's List</h1>
        <input type="text" id="live_search" placeholder="Search here" onkeyup="liveSearch(this.value)">
        
        <table>
            
        
        <tr>
                <th>Name</th>
                <th>Speciality</th>
                <th>License</th>
                <th>Workplace</th>
                </tr>
            
                <div id="searchresult"></div>
        <?php include "../../controller/patient/doctorListControl.php" ?>
        </table>
        
    </div>
</body>