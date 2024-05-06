<?php
//include '../../model/patient_db.php';
session_start();
      
  
if(isset($_REQUEST['showProfile'])){
  header("Location: ../../controller/patient/viewProfileControl.php");
}
if(isset($_REQUEST['updateProfile'])){
    header("Location: ../controller/updateControl.php");
}
if(isset($_REQUEST['documents'])){
  header("Location: ../../controller/patient/documentsControl.php");
}
if(isset($_REQUEST['logout'])){
  session_destroy();
  header("Location: ../../view/patient/login.php");
}


?>