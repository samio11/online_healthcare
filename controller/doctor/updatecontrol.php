<?php
include '../../model/doctor_db.php';
//include '../form_code/updateprof.php';
session_start();
//$fname=$lname=$email=$pnumber =$lnumber= $place=$pass=$haserror="";
$hasError=$updatedPhone=$updatedPass=$phoneError= $passwordError="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowProfile($conObj, $_SESSION["email"]);
if($result)
{
            
        $_SESSION["name"] = $result["name"];
       
        $_SESSION['pnumber'] = $result['pnumber'];
        $_SESSION['pass'] = $result['pass'];
}
//header("Location: ../../view/doctor/updateprof.php");



if(isset($_REQUEST['cancel'])){
  header('Location: ../../view/doctor/myprofile.php');
}

if(isset($_REQUEST['confirm'])){
 
  $updatedName = $_REQUEST['updatedName'];
  $updatedPhone = $_REQUEST['updatedPhone'];
  $updatedPass = $_REQUEST['updatedPass'];

  if  (!preg_match("/^0/", $_REQUEST['updatedPhone'])) {
    $hasError=1;
        $phoneError = "Phone number must start with 0";
} 
//else {    $updatedPhone = $_REQUEST['updatedPhone'];}

if(strlen($updatedPass) < 6 && !preg_match("/[a-z]/",$_REQUEST['updatedPass']))
  {
    $hasError=1;
    $passwordError = "Password must be at least 6 characters long and contain at least one lowercase character";
} 
//else {$updatedPass = $_REQUEST['updatedPass'];}



if ($hasError != 1) {
  $result = $mydb->UpdateProfile($conObj, $_SESSION['email'], $updatedName, $updatedPhone, $updatedPass);
  if ($result) {
      echo "Successfully Updated";
  } else {
      echo "Error updating profile";
  }
  header('Location: ../../view/doctor/myprofile.php');
  exit; // Stop further execution
} else {
  echo "Please correct the validation errors.";
}
}

?>
