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
    <br>
    <form action="" method="POST">
        <div class="docmain">
            <table  class="text"  align="center" width="100%">
                <h3>Approved Appointments</h3>
                <tr>
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
                        <td><button type="submit" name="message" value="<?php echo $appointment['app_id'] ?>">Message</button></td>

                    <?php endforeach; ?>
                    </tr>
            </table>

            <table  width="100%"   align="center">
                <h3>Pending Appointments</h3>
                <tr>
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
                        <td><button type="submit" name="cancel" value="<?php echo $appointment['app_id'] ?>">Cancel</button></td>

                    <?php endforeach; ?>
                    </tr>
            </table>
            <table  width="100%" class="text" cellpadding="10" align="center">
                <h3>Declined Appointments</h3>
                <tr>
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