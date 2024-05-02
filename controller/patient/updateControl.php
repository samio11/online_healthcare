<?php
include '../../model/patient_db.php';
session_start();
if(isset($_REQUEST['update'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->updateProfile($conObj, $_SESSION['email'],$_REQUEST['password'],$_REQUEST['name'],
                                    $_REQUEST['phone'], $_REQUEST['address']);
    if($result){
        echo "updated successfully";
    }     
}
 ?>