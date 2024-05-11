<!DOCTYPE html>
<html>

<head>

    <?php
    include 'homepage.php';
    include '../../controller/patient/appListControl.php';
    include '../../controller/patient/chatSessionControl.php'; ?>
    <title>Apointments</title>
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>

    <form action="" method="POST">
        <br>
        <div class="docmain">
            <table class="customTable">
                <h3 style="color:#04aa6de3">Approved Appointments</h3>
                <tr class="approvedApp">
                    <th>ID</th>
                    <th>Doctor's Name</th>
                    <th>Gender</th>
                    <th>Speciality</th>
                    <th>Time</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($approvedApp as $appointment) : ?>
                    <tr>
                        <td><?php echo $appointment['app_id']; ?></td>
                        <td><?php echo $appointment['d_name']; ?></td>
                        <td><?php echo $appointment['d_gender']; ?></td>
                        <td><?php echo $appointment['d_cat']; ?></td>
                        <td><?php echo $appointment['stime']; ?></td>
                        <td><?php echo $appointment['note']; ?></td>
                        <td><button type="submit" name="message" value="<?php echo $appointment['app_id'] ?>" class="msgButton">Message</button></td>

                    <?php endforeach; ?>
                    </tr>
            </table>

            <table class="customTable">
                <h3 style="color:#aa7e04c7">Pending Appointments</h3>
                <tr class="pendingApp">
                    <th>ID</th>
                    <th>Doctor's Name</th>
                    <th>Gender</th>
                    <th>Speciality</th>
                    <th>Time</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($pendingApp as $appointment) : ?>
                    <tr>
                        <td><?php echo $appointment['app_id']; ?></td>
                        <td><?php echo $appointment['d_name']; ?></td>
                        <td><?php echo $appointment['d_gender']; ?></td>
                        <td><?php echo $appointment['d_cat']; ?></td>
                        <td><?php echo $appointment['time']; ?></td>
                        <td><?php echo $appointment['note']; ?></td>
                        <td><button type="submit" name="cancel" value="<?php echo $appointment['app_id'] ?>" class="penButton">Cancel</button></td>

                    <?php endforeach; ?>
                    </tr>
            </table>
            <table class="customTable">
                <h3 style="color:red">Declined Appointments</h3>
                <tr class="declinedApp">
                    <th>ID</th>
                    <th>Doctor's Name</th>
                    <th>Gender</th>
                    <th>Speciality</th>
                    <th>Time</th>
                    <th>Note</th>
                </tr>
                <tr><?php echo $dstr ?></tr>
            </table>
            <br>
        </div>
    </form>

</body>