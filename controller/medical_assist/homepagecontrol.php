<?php
//include '../../model/medical_assist_db.php';
session_start();
      
  
if(isset($_REQUEST['viewProfile'])){
  header("Location: ../../view/medical_assist/profile.php");
}
if(isset($_REQUEST['docList'])){
    header("Location: ../../view/medical_assist/view_doc.php");
}
if(isset($_REQUEST['patList'])){
    header("Location: ../../view/medical_assist/view_pat.php");
}
if(isset($_REQUEST['appointment'])){
    header("Location: ../../view/medical_assist/appointment.php");
}
if(isset($_REQUEST['portfolio'])){
    header("Location: ../../view/medical_assist/portfolio.php");
}
if(isset($_REQUEST['logout'])){
    header("Location: ../../view/medical_assist/logout.php");
}

?>