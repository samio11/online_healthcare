<?php
include '../../model/doctor_db.php';
session_start();
$email=$pass="";
$emailError=$passError="";


if(isset($_REQUEST['Submit'])){
    $_SESSION['email'] = $_REQUEST['email'];
   if(empty($_REQUEST['email'])){
        $emailError= "please enter a valid email address";

    }
    
    else{
        $email= $_REQUEST['email'];
    }
     if(empty($_REQUEST['pass'])){
        $passError = "please enter a valid Password";
    } 
        
    
    else{
        $pass = $_REQUEST['pass'];
    }

      
            $mydb = new Model();
            $conObj = $mydb->OpenCon();
            $result = $mydb->loginCheck($conObj, $_REQUEST['email'], $_REQUEST['pass']);
    
            if ($result>0) {
                header("Location: ../../view/doctor/homepage.php");
            } else {
                 echo "not valid";
                 
            }
      
    }
 
?>
