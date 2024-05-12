<?php include "../../controller/patient/medAssistListControl.php";
include "homepage.php"  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Medical Assistants</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>


<body class="body">

    <br>
    <div class="docmain">
        <h1 style="color:#5b9aff">Medical Assistants</h1>
        <table class="customTable">
            <thead class="doctor">
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
            </thead>
            <tbody id="">
                <?php echo $str ?>
            </tbody>
        </table>

    </div>


</body>