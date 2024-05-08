<?php
include '../../controller/doctor/profilecontrol.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""  method="POST" >
<table>
<tr>
            <td>Full Name:</td>
            <td><?php echo $result['name']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>E-mail:</td>
            <td><?php echo $result['email']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $result['gender']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>cat:</td>
            <td><?php echo $result['cat']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>pnumber:</td>
            <td><?php echo $result['pnumber']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>lnumber:</td>
            <td><?php echo $result['lnumber']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>place:</td>
            <td><?php echo $result['place']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>pass:</td>
            <td><?php echo $result['pass']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr><td><input type="submit" name="updateProfile" value="Update Profile"></td>
        <td><input type="submit" name="cancel" value="Cancel"></td></tr>
   

</table>
</form>
    
   
        
          
  
       
        
      
   