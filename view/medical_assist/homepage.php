<?php
include '../../controller/medical_assist/homepagecontrol.php';
include '../../css/medical_assist/homepage_page.css';
?>

 <!--
<html>
<head>
 
    </head>
    <body class="homebody">
        <form method="POST" action="">
            <div class="homemain">
            <table >
                <tr>
                    <td><button type="submit" name="showProfile" id="showProfile">View Profile</button></td>
                    <td><button type="submit" name="docList" id="docList">View Doctors</button></td>
                    <td><button type="submit" name="patList" id="patList">View Patients</button></td>
                    <td><button type="submit" name="appointment" id="appointment">Create Appointments</button></td>
                    <td><button type="submit" name="portfolio" id="portfolio">Create Portfolio</button></td>
                    <td><button type="submit" name="logout" id="logout">Logout</button></td>
                </tr>

            </table>         
            </div>
        </form>

    </body>
</html>
 --> 
 <html>
<head>
 
</head>
<body class="homebody">
    <div class="logout-container">
        <form method="POST" action="">
            <button type="submit" name="logout" id="logout">Logout</button>
        </form>
    </div>
    <div class="homemain">
        <table>
            <tr>
                <td><button type="submit" name="viewProfile" id="viewProfile">View Profile</button></td>
                <td><button type="submit" name="docList" id="docList">View Doctors</button></td>
                <td><button type="submit" name="patList" id="patList">View Patients</button></td>
                <td><button type="submit" name="appointment" id="appointment">Create Appointments</button></td>
                <td><button type="submit" name="portfolio" id="portfolio">Create Portfolio</button></td>
            </tr>
        </table>
    </div>
</body>
</html>