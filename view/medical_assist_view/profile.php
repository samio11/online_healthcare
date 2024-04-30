<?php
include '../controller/profilecontrol.php';
//session_start();
?>
<html>
    <body>
        <h1>My Profile</h1>
        <form method="POST" action="">
         <table>
<td><input type="submit" name="updateProfile" value="Update Profile"></td>

<td><input type="submit" name="ViewDoc_List" value="View Doctors"></td>
<td><input type="submit" name="createPortfolio" value="Create Portfolio"></td>
        </table>
</body>
</html>

<?php
if($result -> num_rows > 0)
{ 
    
    echo "<th>Name:  </th>";
    echo "<td>" . $row ['name']."</td>";
    echo"<br>";
    echo "<th>Password:  </th>";
    echo "<td>" . $row ['password']."</td>";
    echo"<br>";
    echo "<th>Email:  </th>";
    echo "<td>" . $row['email']."</td>";
    echo"<br>";
    echo "<th>Phonenumber:  </th>";
    echo "<td>" . $row['phonenumber']."</td>";
    echo"<br>";
    echo "<th>Nationselect:  </th>";
    echo "<td>" . $row['nationselect']."</td>";
    echo"<br>";
   
}
?>
    







