<?php 
    include '../../model/patient_db.php';
    session_start();
    $d_id =  $_GET['d_id'];
    echo $d_id;
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->doctor($conObj,$d_id);
    if($result){
        $_SESSION['dname'] = $result['name'];
        $_SESSION['cat'] = $result['cat'];
    }



    
?>