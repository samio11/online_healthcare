<?php
include '../../model/medical_assist_db.php';
session_start();
$pres_id=$app_id=$p_id=$p_name=$p_email=$p_gender=$height=$weight=$bg=$dia=$appdate=$stime=$d_name=$prescribed=$test=$haserror=$p_nameError=$p_emailError=$p_genderError=$heightError=$weightError=$bgError=$diaError=$appdateError=$d_nameError=$stimeError="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewPresList($conObj, $_SESSION["pres_id"]);
if ($result) {
    $_SESSION['pres_id'] = $result['pres_id'];
    $_SESSION['app_id'] = $result['app_id'];
    $_SESSION['p_id'] = $result['p_id'];
    $_SESSION['prescribed'] = $result['prescribed'];
    $_SESSION['test'] = $result['test'];


}


if (isset($_REQUEST['return'])) {
    header('Location: ../../view/medical_assist/homepage.php');
}

if (isset($_REQUEST['submitPrescription'])) {

    $p_name = $_REQUEST['p_name'];
    $p_email= $_REQUEST['p_email'];
    $p_gender = $_REQUEST['p_gender'];
    $height= $_REQUEST['height'];
    $weight= $_REQUEST['weight'];
    $bg= $_REQUEST['bg'];
    $dia= $_REQUEST['dia'];
    $appdate= $_REQUEST['appdate'];
    $stime= $_REQUEST['stime'];
    $d_name= $_REQUEST['d_name'];


    

        
        $result = $mydb->updatePresc($conObj, $_SESSION['pres_id'], $app_id,$p_id,$p_name,$p_email,$p_gender, $height,$weight,$bg,$dia,$appdate,$stime,$d_name,$prescribed,$test);
        if ($result) {
            echo "Successfully Updated";
        exit; 
      
}
}