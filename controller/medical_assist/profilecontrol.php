<?php
include '../../model/medical_assist_db.php';
session_start();
$hasError=$email="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewProfile($conObj, $_SESSION['email']);
if($result)
{
    $_SESSION['name']= $result['name'];
    $_SESSION['email']= $result['email'];
    $_SESSION['phone']= $result['phone'];
    $_SESSION['gender']= $result['gender'];
    $_SESSION['address']= $result['address'];
    $_SESSION['license']= $result['license'];
    $_SESSION['dob']= $result['dob'];
    $_SESSION['nationselect']= $result['nationselect'];
    $_SESSION['url']= $result['profilePic'];
    
}
if(!empty($_FILES['uploadphoto']['name']))
{
    $hasError=1;
    $profilePic="";
    $profilePic="../../upload/medical_assist"."profilePic".$_SESSION['email'].$_FILES['uploadphoto']['name'];

    move_uploaded_file($_FILES['uploadphoto']['tmp_name'],$profilePic);
}
else{
    echo"Please Upload Photo!";
}

if($hasError==1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadPic($conobj,$_SESSION['email'], $profilePic);
    if($result)
    {
        header("Location: ../../view/medical_assist/profile.php");
        echo"Added Successfully";
    }
    else{
        echo "Error Occurred";
        }
}

if(isset($_REQUEST['updateProfile'])){
    header("Location: ../../view/medical_assist/updateProfile.php");
   
 }
 if(isset($_REQUEST['gobackHome'])){
    header("Location: ../../view/medical_assist/homepage.php");
   
 }
?>

