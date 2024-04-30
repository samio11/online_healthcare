<?php
include '../models/mydb.php';
session_start();


if(isset($_REQUEST['Submit'])){
    if(empty($_REQUEST['Email'])){
        echo "enter valid email <br>";
    }
    
    else{
        echo $_REQUEST['Email'];
        $_SESSION['Email'] = $_REQUEST['Email'];
    }
     if(empty($_REQUEST['Password'])){
        echo "enter valid password<br><br>";
        
    }
    else{
        echo $_REQUEST['Password'];
    }

    $mydb = new Model();
        $conobj = $mydb->OpenCon();
        $result=$mydb->CheckLoginCredentials($conobj,$_REQUEST["Email"], $_REQUEST["Password"]);
        if($result->num_rows<1)
        {
            echo "Invalid access";
        }
        else{
          header("Location:../view/profile.php");

        }
       
}
        
?>
