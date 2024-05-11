<?php include "../../controller/patient/doctorListControl.php";
 include "homepage.php"  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Doctor's List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>


<body class="body">
    
<br>
    <div class="docmain">
        <h1 style="color:#5b9aff">Doctor's List</h1>
        <input type="text" id="live_search" placeholder="Search here" onkeyup="liveSearch(this.value)">

        <table class="customTable">

            <thead class="doctor">
                <th>Name</th>
                <th>Speciality</th>
                <th>Gender</th>
                <th>Workplace</th>
                <th>Action</th>
            </thead>
            <tbody id="searchresult">
                <?php echo $str ?>
            </tbody>
        </table>

    </div>


</body>