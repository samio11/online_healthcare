<?php
include '../../controller/medical_assist/homepagecontrol.php';
include '../../css/medical_assist/homepage_page.css';
?>

 <html>
<head>
 
</head>
<body class="homebody">
    <div class="logout-container">
        <form method="POST" action="">
            <button type="submit" name="logout" id="logout">Logout</button>
    </div>
    <div class="homemain">
        <table>
            <tr>
                <td><button type="submit" name="viewProfile" id="viewProfile">View Profile</button></td>
                <td><button type="submit" name="docList" id="docList">View Doctors</button></td>
                <td><button type="submit" name="appoinList" id="appoinList">View Appointments</button></td>
                <td><button type="submit" name="billing" id="billing">Create Billing</button></td>
                <td><button type="submit" name="prescription" id="prescription">Create Prescription</button></td>
            </tr>
            </form>
        
        </table>
  
</body>
</html>