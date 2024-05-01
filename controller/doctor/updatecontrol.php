<?php
include '../model/db.php';
//include '../form_code/updateprof.php';
session_start();
//$fname=$lname=$email=$pnumber =$lnumber= $place=$pass=$haserror="";
$hasError=$updatedPhone=$updatedPass=$phoneError= $passwordError="";
$db = new Model();
$conobj = $db->OpenCon();
$result = $db->ProfileInfo($conobj,"doctable", $_SESSION['email']);
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()){
            
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['pnumber'] = $row['pnumber'];
        $_SESSION['pass'] = $row['pass'];
      }
//header("Location: ../view/updateProfile.php");
}

if(isset($_REQUEST['cancel'])){
  header('Location: ../form_code/homepage.php');
}

if(isset($_REQUEST['confirm'])){
  if  (!preg_match("/^0/", $_REQUEST['updatedPhone'])) {
    $haserror=1;
        $phoneError = "Phone number must start with 0";
} else {
    $updatedPhone = $_REQUEST['updatedPhone'];
}
if(strlen($updatedPass) < 6 && !preg_match("/[a-z]/",$_REQUEST['updatedPass']))
  {
    $haserror=1;
    $passwordError = "Password must be at least 6 characters long and contain at least one lowercase character";
} else {
  $updatedPass = $_REQUEST['updatedPass'];
}

if ($hasError != 1) {
  $result = $db->UpdateProfile($conobj, "doctable", $_SESSION['email'], $_REQUEST['updatedName'], $_REQUEST['updatedPhone'], $_REQUEST['updatedPass']);
  if ($result === TRUE) {
      echo "Successfully Updated";
  } else {
      echo "Check for errors";
  }
  header('Location: ../form_code/homepage.php');
  exit; // Stop further execution

}else {
  echo "Please complete the validation ";
}
}


?>