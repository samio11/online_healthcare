<?php
include '../../model/doctor_db.php';
session_start();

if(isset($_REQUEST['showProfile'])){
   // $_SESSION["username"] = $_REQUEST['email'];
    if (isset($_SESSION["email"])) {
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->ShowProfile($conObj, $_SESSION["email"]);
        if ($result) {
                echo "<table>";
                echo "<tr><td>Full Name:</td><td>".$result["name"]."</td></tr>";
                echo "<tr><td>email:</td><td>".$result["email"]."</td></tr>";
                echo "<tr><td>gender:</td><td>".$result["gender"]."</td></tr>";
                echo "<tr><td>Category:</td><td>".$result["cat"]."</td></tr>";
                echo "<tr><td>phone number:</td><td>".$result["pnumber"]."</td></tr>";
                echo "<tr><td>licence Place:</td><td>".$result["lnumber"]."</td></tr>";
                echo "<tr><td>Working Place:</td><td>".$result["place"]."</td></tr>";
                echo "<tr><td>password:</td><td>".$result["pass"]."</td></tr>";
                echo "</table>";
               
           
        } 
    else {echo "No profile information found.";}
        
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

