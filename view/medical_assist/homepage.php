<?php
include '../../controller/medical_assist/homepagecontrol.php';
?>

<html>
<head>
<link rel="stylesheet" href="../../css/medical_assist/homepage.css">
</head>
<body class="homebody">

    <div class="logout-container">
        <form method="POST" action="">
        
            <button type="submit" name="logout" id="logout">Logout</button>
    </div>
    <div class="homemain">
    <div class="title-container">
    <h1 style=" color: rgb(58, 48, 130);">Welcome To Homepage</h1>
        </div>
        <table>
            <tr>
                <td><button type="submit" name="viewProfile" id="viewProfile">View Profile</button></td>
                <td><button type="submit" name="docList" id="docList">View Doctors</button></td>
                <td><button type="submit" name="appoinList" id="appoinList">View Appointments</button></td>
                <td><button type="submit" name="billing" id="billing">Create Billing</button></td>
                <td><button type="submit" name="view_presc" id="view_presc">View Prescriptions</button></td>
                <td><button type="submit" name="view_pat_info" id="view_pat_info">View P.Info</button></td>
                <td><button type="submit" name="upload_presc" id="upload_presc">Upload Prescription</button></td>
                
            </tr>
            </form>
        
        </table>
  
</body>
</html>