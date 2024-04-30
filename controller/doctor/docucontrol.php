<?php
include '../model/db.php';
include '../form_code/document.php';
session_start();
$hasError = "";

if(!empty( $_FILES['photo']['name']) || !empty( $_FILES['nid']['name']) || !empty( $_FILES['medical']['name']))
{
   
    $photo=$nid=$medical="";
    $photo="../upload/"."photo".$_SESSION['email'].$_FILES['photo']['name'];
    $nid="../upload/"."nid".$_SESSION['email'].$_FILES['nid']['name'];
    $medical="../upload/"."medical".$_SESSION['email'].$_FILES['medical']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
    move_uploaded_file($_FILES['nid']['tmp_name'],$nid);
    move_uploaded_file($_FILES['medical']['tmp_name'],$medical);
    
}else{
    echo "No file uploaded";
    $hasError=1;
  
}
if(isset($_REQUEST['cancel'])){
    header('Location: ../form_code/homepage.php');
  }
  if($hasError!=1)
      {
      $db= new Model();
      $conobj= $db->OpenCon();
      $result=$db->UploadDocument($conobj,"docfile",$_SESSION['email'], $photo, $nid, $medical);
      
      if($result===TRUE)
      {
          echo "Successfully Uploaded";
      }
      else{
        echo "Error Occurred".$conobj->error;
    }
}
?>