<?php
include '../../model/patient_db.php';
session_start();
if(isset($_REQUEST['showProfile'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->ShowProfile($conObj, $_SESSION['email']);
      echo $result["name"] ;
  
}

if(isset($_REQUEST['updateProfile'])){
    header("Location: ../controller/updateControl.php");
}
if(isset($_REQUEST['documents'])){
  header("Location: ../controller/documentsControl.php");
}

?>