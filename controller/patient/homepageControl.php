<?php
//include '../../model/patient_db.php';
session_start();
      
  
if(isset($_REQUEST['showProfile'])){
  header("Location: ../../controller/patient/viewProfileControl.php");
}
if(isset($_REQUEST['updateProfile'])){
    header("Location: ../controller/updateControl.php");
}
if(isset($_REQUEST['appointment'])){
  header("Location: ../../view/patient/viewAppointment.php");
}
if(isset($_REQUEST['docList'])){
  header("Location: ../../view/patient/doctorList.php");
}
if(isset($_REQUEST['logout'])){
  session_destroy();
  header("Location: ../../view/patient/login.php");
}


?>