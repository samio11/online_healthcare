
<?php
include '../../model/doctor_db.php';
session_start();
$hasError=$email="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowProfile($conObj, $_SESSION['email']);
if($result)
{
    $_SESSION['name']= $result['name'];
    $_SESSION['email']= $result['email'];
    $_SESSION['gender']= $result['gender'];
    $_SESSION['cat']= $result['cat'];
    $_SESSION['pnumber']= $result['pnumber'];
    $_SESSION['lnumber']= $result['lnumber'];
    $_SESSION['place']= $result['place'];
    $_SESSION['pass']= $result['pass'];
    $_SESSION['url']= $result['photo'];


}
if(!empty($_FILES['uploadphoto']['name']))
{
    $hasError=1;
    $photo="";
    $photo="../../upload/doctor"."photo".$_SESSION['email'].$_FILES['uploadphoto']['name'];

    move_uploaded_file($_FILES['uploadphoto']['tmp_name'],$photo);
}
else{
 echo"Enter your photo!";
}

if($hasError==1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadPic($conobj,$_SESSION['email'], $photo);
    if($result)
    {
       header("Location: ../../view/doctor/myprofile.php");
       echo "added successfully";
    }
    else{
        echo "Error Occurred";
        }
}

if(isset($_REQUEST['updateProfile'])){
    header("Location: ../../view/doctor/updateprof.php");
   
 }
 if(isset($_REQUEST['cancel'])){
    header("Location: ../../view/doctor/homepage.php");
   
 }
//header("Location: ../../view/doctor/myprofile.php");
?>






