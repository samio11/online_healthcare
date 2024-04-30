<?php
include '../model/db.php';
session_start();


if(isset($_REQUEST['showProfile'])){
   // $_SESSION["username"] = $_REQUEST['email'];
    if (isset($_SESSION["email"])) {
        $db = new Model();
        $conobj = $db->OpenCon();
        $result = $db->ProfileInfo($conobj, "doctable", $_SESSION["email"]);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<table>";
                echo "<tr><td>First Name:</td><td>".$row["fname"]."</td></tr>";
                echo "<tr><td>Last Name:</td><td>".$row["lname"]."</td></tr>";
                echo "<tr><td>Email:</td><td>".$row["email"]."</td></tr>";
                echo "<tr><td>Phone Number:</td><td>".$row["pnumber"]."</td></tr>";
                echo "<tr><td>License Number:</td><td>".$row["lnumber"]."</td></tr>";
                echo "<tr><td>Working Place:</td><td>".$row["place"]."</td></tr>";
                echo "</table>";
               
            }
        } else {
            echo "No profile information found.";
        }
    }
    else {
       echo "Session variable 'email' is not set.";
}
    }
    if(isset($_REQUEST['updateProfile'])){
        header("Location: ../form_code/updateprof.php");
    }
    if(isset($_REQUEST['documents'])){
        header("Location: ../form_code/document.php");
      }
      if(isset($_REQUEST['list'])){
        header("Location: ../form_code/app.php");
      }
      
?>

