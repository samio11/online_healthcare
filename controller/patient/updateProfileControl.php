<?php
include '../../model/patient_db.php';
session_start();
echo $_SESSION['email'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowProfile($conObj, $_SESSION['email']);
if($result)
{
    $_SESSION['name']= $result['name'];
    //$_SESSION['email']= $result['email'];
    $_SESSION['phone']= $result['phone'];
    $_SESSION['gender']= $result['gender'];
    $_SESSION['address']= $result['address'];
    $_SESSION['dob']= $result['dob'];




}
header("Location: ../../view/patient/profile.php");
?>