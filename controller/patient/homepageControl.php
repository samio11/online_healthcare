<?php
include '../models/mydb.php';
session_start();
if(isset($_REQUEST['showProfile'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->ShowProfile($conObj, $_SESSION['email']);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){
            
          echo "<table><tr><td>Name:</td><td>".$row["name"]."</td></tr>";
          echo "<tr><td>Date of Birth:</td><td>".$row["dob"]."</td></tr>";
          echo "<tr><td>Phone Number:</td><td>".$row["phone"]."</td></tr>";
          echo "<tr><td>Email:</td><td>".$row["email"]."</td></tr></table>"; 
        }
    }
  }

if(isset($_REQUEST['updateProfile'])){
    header("Location: ../controller/updateControl.php");
}
if(isset($_REQUEST['documents'])){
  header("Location: ../controller/documentsControl.php");
}
?>