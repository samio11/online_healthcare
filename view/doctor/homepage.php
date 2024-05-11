<?php

//include '../control/homevalidation.php';
include '../../controller/doctor/homevalidation.php'; 


?>

<html>
<head>
<link rel="stylesheet" href="../../css/doctor/style.css">
</head>
    <body>
    <div class="main">
        <form method="POST" action="">
            <table>
   
                <td><input type="submit" name= "showProfile" value="Profile"></td>
               
                <td><input type="submit" name="list" value="Check Appointment List"></td>
                <td><input type="submit" name= "documents" value="Documents"></td>
                <td><input type="submit" name= "logout" value="Logout"></td>
                <td><input type="submit" name= "assist" value="Medical Assistant"></td>
               
            </table>
           
        </form>
        </div>
    </body>
</html>




