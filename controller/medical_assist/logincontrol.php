<?php
include '../../model/medical_assist_db.php';
session_start();


if(isset($_REQUEST['Login'])){
    $_SESSION['email'] = $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
    if($result > 0)
    {
       $_SESSION['ma_id'] = $result['ma_id'];
        header("Location: ../../view/medical_assist/homepage.php");
    }
    else echo "Invalid Login";
}
        
?>
