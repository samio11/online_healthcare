<?php
include '../../model/medical_assist_db.php';
session_start();
$haserror=$amount=$amountError="";

if(isset($_REQUEST['return'])){
    header("Location: ../../view/medical_assist/homepage.php");
}
if (isset($_REQUEST['Confirm'])) {
if (!is_numeric($_REQUEST['amount'])) {
 
    $amountError = "Amount invalid";
    $haserror = 1;

}

if($haserror!=1){ 
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->updateAppointment($conObj, $app_id,$amount);
    if($result)
    {
        echo "Successful payment setup";
    } else {
        echo "Error updating profile";
    }
    header('Location: ../../view/medical_assist/set_payment.php');
    exit; 
}
    
}
?>