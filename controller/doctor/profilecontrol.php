
<?php
include '../../model/doctor_db.php';
session_start();

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


}
if(isset($_REQUEST['updateProfile'])){
    header("Location: ../../view/doctor/updateprof.php");
   
 }
 if(isset($_REQUEST['cancel'])){
    header("Location: ../../view/doctor/homepage.php");
   
 }
//header("Location: ../../view/doctor/myprofile.php");
?>






