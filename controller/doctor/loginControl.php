<?php
include '../model/db.php';
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
        $pass= $_REQUEST['pass'];
    }

        if (!empty($_REQUEST['email']) && !empty($_REQUEST['pass'])) {
            $db = new Model();
            $conobj = $db->OpenCon();
            $result = $db->loginCheck($conobj, "doctable", $_REQUEST["email"], $_REQUEST["pass"]);
    
            if ($result->num_rows < 1) {
                echo "Invalid login";
            } else {
                echo $_SESSION["email"]=$_REQUEST["email"];
                header("Location: ../form_code/homepage.php");
            }
        } else {
            
            echo "Email or password is empty";
        }
        
    }
 
?>
