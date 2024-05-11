<?php
include '../../model/medical_assist_db.php';
session_start();
      
  
if(isset($_REQUEST['viewProfile'])){
  header("Location: ../../view/medical_assist/profile.php");
}
if(isset($_REQUEST['docList'])){
    header("Location: ../../view/medical_assist/view_doc.php");
}
if(isset($_REQUEST['appoinList'])){
    header("Location: ../../view/medical_assist/appointment_List.php");
}
if(isset($_REQUEST['billing'])){
    header("Location: ../../view/medical_assist/appointment.php");
}
if(isset($_REQUEST['prescription'])){
    header("Location: ../../view/medical_assist/prescription.php");
}
if(isset($_REQUEST['logout'])){
    header("Location: ../../view/medical_assist/login.php");
}

?>