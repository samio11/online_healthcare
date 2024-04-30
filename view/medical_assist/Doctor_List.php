<?php
include '../controller/Doc_Listcontrol.php';
session_start();
?>
<html>
    <body>
        <h1>Doctor's List:</h1>
        <form method="POST" action="">
         <table>
<td><input type="submit" name="goback" value="Go Back"></td>
        </table>
</body>
</html>
<?php
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()){
        
      echo "<table><tr><td>Doctor's Name:</td><td>".$row["Doc_Name"]."</td></tr>";
      echo "<tr><td>Email:</td><td>".$row["Doc_Email"]."</td></tr>";
      echo "<tr><td>Available Timings:</td><td>".$row["Doc_Hours"]."</td></tr>";
      echo "<tr><td>Gender:</td><td>".$row["Doc_Gender"]."</td></tr>";
      echo "<tr><td>Fees per Patient:</td><td>".$row["Doc_Fees"]."</td></tr>";
      echo "<tr><td>Salary</td><td>".$row["Doc_Salary"]."</td></tr>";
      echo "<tr><td>Specialized Field:</td><td>".$row["Doc_Specialist"]."</td></tr><br></table>"; 
    }
}
?>
