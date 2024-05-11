<?php include "../../controller/patient/doctorListControl.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>Doctor's List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<?php include "homepage.php"  ?>

<body class="docmain">

    <div class="docmain">
        <h1 class="doctorheader">Doctor's List</h1>
        <input type="text" id="live_search" placeholder="Search here" onkeyup="liveSearch(this.value)">

        <table>
            <thead class="doctorthead">
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