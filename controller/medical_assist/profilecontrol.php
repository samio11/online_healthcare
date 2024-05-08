<?php
include '../../model/medical_assist_db.php';
session_start();
echo $_SESSION['email'];
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

?>
?>