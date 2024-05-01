<?php
include '../control/profilecontrol.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<table>"; ?>
    <tr><td>First Name:</td><td><?php echo $fname; ?></td></tr>
    <tr><td>Last Name:</td><td><?php echo $lname; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $email; ?></td></tr>
    <tr><td>Phone Number:</td><td><?php echo $pnumber; ?></td></tr>
    <tr><td>License Number:</td><td><?php echo $lnumber; ?></td></tr>
    <tr><td>Working Place:</td><td><?php echo $place; ?></td></tr>
    <?php echo "</table>"; ?>

</body>
</html>
          
  
       
        
      
   