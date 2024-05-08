<?php
  include "../../model/doctor_db.php";
    $email= $_GET['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->removePicture($conObj, $email);
    if($result)
    {
        //header("Location: ../../view/patient/login.php");
        echo "";
       
    }
?>