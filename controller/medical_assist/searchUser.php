<?php
include '../models/mydb.php';
$name = $_GET['name'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowUser($conObj,$name);

if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){

          echo "<table><tr><td>Name:</td><td>".$row["name"]."</td></tr>";
          echo "<tr><td>Email:</td><td>".$row["email"]."</td></tr>";
          echo "<tr><td>Phone Number:</td><td>".$row["phonenumber"]."</td></tr>";
          echo "<tr><td>Nation select</td><td>".$row["nationselect"]."</td></tr></table>"; 
        }
    }
?>