<?php
include '../../model/doctor_db.php';


if(isset($_REQUEST['submit'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $Result = $mydb->AddDoc($conObj,$_REQUEST['app_id'],$_REQUEST['p_id'],$_REQUEST['prescribed'],$_REQUEST['test']);
    if($Result==1)
    {
        echo "submit";
        header("Location: ../../view/doctor/document.php");
    }
    
    else echo "failed";
    
    }


?>