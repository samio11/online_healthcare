<?php
include '../../controller/medical_assist/set_paymentcontrol.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/medical_assist/prescription_page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form method="POST" action="">
        <h1> Set Payment Amount:</h1><br>

        <table>
        <tr>
                <td>Amount:</td>
                <td><input type="text" id="amount" name="amount" />
                </td>
            </tr>
        <tr>
        </table>
        <input type="submit" name="Confirm" value="Confirm">
        <input type="submit" name="return" value="Homepage">
        
