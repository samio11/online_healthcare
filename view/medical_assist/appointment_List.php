<?php
include '../../controller/medical_assist/appoin_Listcontrol.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/medical_assist/appoin_page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
</head>

<body>
<h1 style=" color: rgb(58, 48, 130);">Appointments</h1>
    <form action="" method="post">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th>App.ID</th>
            <th>P.Name</th>
            <th>P.Gender</th>
            <th>P.Address</th>
            <th>D.Name</th>
            <th>D.Gender</th>
            <th>D.Category</th>
            <th>D.Time</th>
            <th>Scheduled Time</th>
            <th>D.Fees</th>
            <th>D.Note</th>
            <th>Status</th>
        </tr>
        <?php foreach ($_SESSION['appoins'] as $appoin): ?>
        <tr>
            <td><?php echo $appoin['app_id']; ?></td>
            <td><?php echo $appoin['p_name']; ?></td>
            <td><?php echo $appoin['p_gender']; ?></td>
            <td><?php echo $appoin['p_address']; ?></td>
            <td><?php echo $appoin['d_name']; ?></td>
            <td><?php echo $appoin['d_gender']; ?></td>
            <td><?php echo $appoin['d_cat']; ?></td>
            <td><?php echo $appoin['time']; ?></td>
            <td><?php echo $appoin['stime']; ?></td>
            <td><?php echo $appoin['payment']; ?></td>
            <td><?php echo $appoin['note']; ?></td>
            <td><?php echo $appoin['status']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form action="../../view/medical_assist/homepage.php" method="post">
        <input type="submit" name="goback" value="Homepage">
    </form>
</body>

</html>
