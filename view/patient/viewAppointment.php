<!DOCTYPE html>
<html>
<head>
    <?php include '../../controller/patient/appListControl.php' ?>
    <title>Apointments</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>
<body>
    <div class="docmain">
    <table class="text">
        
            <th>
                <td>Doctor's Name</td>
                <td>Time</td>
                <td>Note</td>
                <td>Status</td>
            </th>

<p ><?php echo $str ?> </p>

        
    </table>
    </div>

</body>