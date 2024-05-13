<?php
include '../../model/medical_assist_db.php';
session_start();
$app_id = $_GET['app_id'];
$haserror=$amount=$amountError="";

$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewAppo($conObj, $app_id);
if ($result) {
    $_SESSION['app_id'] = $result['app_id'];
}

if(isset($_REQUEST['return'])){
    header("Location: ../../view/medical_assist/homepage.php");
}
if (isset($_REQUEST['Confirm'])) {

if (is_numeric($_REQUEST['amount'])) {
    $amount = $_REQUEST['amount'];
} else {
    $amountError = "Enter numeric Value";
    $haserror = 1;
}



if($haserror!=1){ 
   
    $result = $mydb->updateAppointment($conObj, $app_id,$amount);
    if ($result) {
        echo "Successfully Amount set";
    }
} else {
    echo "Error setting amount";
}
    
}
?>