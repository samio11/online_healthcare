
<?php
include '../../model/doctor_db.php';

session_start();

$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->getId($conObj, $_SESSION['d_id']);
if ($result) {
    $_SESSION['app_id'] = $result['app_id'];
    $_SESSION['p_id'] = $result['p_id'];
}




if(isset($_REQUEST['approve'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $Result = $mydb->setTime($conObj, $_SESSION['app_id'],$_REQUEST['stime']);
    if($Result==1)
    {
        echo "submit";
        header("Location: ../../view/doctor/app.php");
    }
    
    else echo "failed";
    
    }










?>