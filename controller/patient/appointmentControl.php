<?php 
    include '../../model/patient_db.php';
    session_start();
    $d_id =  $_GET['d_id'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->doctor($conObj,$d_id);
    if($result){
        $_SESSION['dname'] = $result['name'];
        $_SESSION['cat'] = $result['cat'];
    }
if(isset($_REQUEST['confirm'])){
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->reqAppointment($conObj, $_SESSION['p_id'], $d_id, $_REQUEST['time'], $_REQUEST['note']);
    if($result==1)
    {
        header("Location: ../../view/patient/homepage.php");
    }

    else echo "failed";
    
}


    
?>