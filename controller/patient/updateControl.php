<?php
include '../models/mydb.php';
include '../view/updateProfile.php';
//session_start();
$hasError=$updatedPhone=$updatedPass="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowProfile($conObj, $_SESSION['email']);
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()){
            
        $_SESSION['name'] = $row['name'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['password'] = $row['password'];
      }
//header("Location: ../view/updateProfile.php");
}

if(isset($_REQUEST['cancel'])){
  header('Location: ../view/homepage.php');
}

if(isset($_REQUEST['confirm'])){
  if (strlen($_REQUEST['updatedPhone'])==11) {
    $updatedPhone = $_REQUEST['updatedPhone'];
} else {
    $phoneError = "Enter  11 digit phone number";
    $hasError=1;
}
if(!preg_match('/[^a-z0-9 _]+/i',$_REQUEST['updatedPass'])){
  $passwordError = "include special char";
  $hasError=1;
  
} else {
      $updatedPass = $_REQUEST['updatedPass'];
}
if($hasError!=1){
  $result = $mydb->UpdateUser($conObj,$_SESSION['email'], $_REQUEST['updatedName'], $_REQUEST['updatedPhone'], $_REQUEST['updatedPass']);
  if($result === TRUE)
  {
      echo "Successfully Updated";
      header('Location: ../view/homepage.php');
  }
  else{
      echo "Check for errors";
  }
}
}
?>