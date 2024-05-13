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
    $_SESSION['url']= $result['photo'];
    
}
if(!empty($_FILES['uploadphoto']['name']))
{
    $hasError=1;
    $photo="";
    $photo="../../upload/medical_assist"."photo".$_SESSION['email'].$_FILES['uploadphoto']['name'];

    move_uploaded_file($_FILES['uploadphoto']['tmp_name'],$photo);
}
else{
 echo"";
}

if($hasError==1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadPic($conobj,$_SESSION['email'], $photo);
    if($result)
    {
       header("Location: ../../view/medical_assist/profile.php");
       echo "added successfully";
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

