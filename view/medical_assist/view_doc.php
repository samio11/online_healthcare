<?php
include '../../controller/medical_assist/doc_Listcontrol.php';
include '../../css/medical_assist/docList_page.css';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Doctors:</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Speciality</th>
            <th>Phone Number</th>
            <th>Valid License</th>
            <th>Address</th>
        </tr>
        <?php foreach ($_SESSION['doctors'] as $doctor): ?>
        <tr>
            <td><?php echo $doctor['name']; ?></td>
            <td><?php echo $doctor['email']; ?></td>
            <td><?php echo $doctor['gender']; ?></td>
            <td><?php echo $doctor['cat']; ?></td>
            <td><?php echo $doctor['pnumber']; ?></td>
            <td><?php echo $doctor['lnumber']; ?></td>
            <td><?php echo $doctor['place']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form action="../../view/medical_assist/homepage.php" method="post">
        <input type="submit" name="goback" value="Homepage">
    </form>
</body>

</html>
