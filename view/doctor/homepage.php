<?php

//include '../control/homevalidation.php';
include '../../controller/doctor/homevalidation.php'; 


?>

<html>
    <body>
        <form method="POST" action="">
            <table>
   
                <td><input type="submit" name= "showProfile" value="Profile"></td>
        
                <td><input type="submit" name="list" value="Check Appointment List"></td>
                <td><input type="submit" name= "documents" value="Documents"></td>
                <td><input type="submit" name= "logout" value="Logout"></td>
               
            </table>
           
        </form>
    </body>
</html>




