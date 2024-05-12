<?php include "../../controller/patient/prescriptionControl.php";
include "homepage.php"  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Prescriptions</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body class="body">

    <br>
    <div class="docmain">
        <h1 style="color:#5b9aff">Prescriptions</h1>
        <table class="customTable">
            <thead class="doctor">
                <th>Appointment Id</th>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
                <th>Download</th>
            </thead>

            <?php foreach ($prescription as $pres) : ?>
                <tr>

                    <td><?php echo $pres['app_id']; ?></td>
                    <td><?php echo $pres['d_name']; ?></td>
                    <td><?php echo $pres['appdate']; ?></td>
                    <td><button type="submit" name="download" value="<?php echo $pres['app_id'] ?>" class="msgButton">Download</button></td>

                <?php endforeach; ?>
                </tr>

        </table>

    </div>

</body>