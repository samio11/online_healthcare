<?php
include 'homepage.php';
include '../../controller/patient/paymentConfirmControl.php';
//include '../../controller/patient/paymentControl.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Receipt</title>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <div class="main">
        <h1 align="center">Payment Receipt</h1>
        <form action="" method="POST">

            <table>
                <tr>
                    <td>
                        <h3 align="center">Patient's Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="pname">Patient Name:</td>
                    <td> <?php echo $_SESSION['pname'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="add"> Address: </td>
                    <td><?php echo $_SESSION['padd'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="phone"> Phone: </td>
                    <td><?php echo $_SESSION['pphone'] ?></label></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        <h3 align="center">Doctor's Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="doctor">Doctor Name:</td>
                    <td> <?php echo $_SESSION['dname'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="cat"> Speciality: </td>
                    <td><?php echo $_SESSION['dcat'] ?></label></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        <h3>Transection Information</h3>
                    </td>
                </tr>
                <tr>
                    <td><label for="id"> TRX ID: </td>
                    <td colspan=""><?php echo $tran_id ?></label></td>
                </tr>
                <tr>
                    <td><label for="date"> TRX Date: </td>
                    <td colspan=""><?php echo $tran_date ?></label></td>
                </tr>
                <tr>
                    <td><label for="amount"> Amount: </td>
                    <td colspan=""><?php echo $amount ?></label></td>
                </tr>

                <tr>
                    <td><label for="type"> Card Type: </td>
                    <td colspan=""><?php echo $card_type ?></label></td>
                </tr>
                <tr>
                    <td><label for="status"> Status: </td>
                    <td colspan=""><?php echo $status ?></label></td>
                </tr>



            </table>



            <div class="wrap"> <button type="submit" name="confirm" id="cinfirm">Download Receipt</button></div>
        </form>

    </div>
</body>