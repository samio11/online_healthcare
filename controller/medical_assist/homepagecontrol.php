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
    header("Location: ../../view/medical_assist/create_billing.php");
}
if(isset($_REQUEST['view_presc'])){
    header("Location: ../../view/medical_assist/view_pres.php");
}
if(isset($_REQUEST['view_pat_info'])){
    header("Location: ../../view/medical_assist/view_patientInfo.php");
}

if(isset($_REQUEST['logout'])){
    header("Location: ../../view/medical_assist/login.php");
}

?>