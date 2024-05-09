<?php
include '../../model/medical_assist_db.php';
session_start();
$mydb = new Model();
$conObj = $mydb->OpenCon();
$cursor = $mydb->View_docs($conObj);

if($cursor) {
    $doctors = [];
    foreach ($cursor as $doctor) {
        $doctors[] = [
            'name' => $doctor['name'],
            'email' => $doctor['email'],
            'gender' => $doctor['gender'],
            'cat' => $doctor['cat'],
            'pnumber' => $doctor['pnumber'],
            'lnumber' => $doctor['lnumber'],
            'place' => $doctor['place']
        ];
    }
    $_SESSION['doctors'] = $doctors;
}

if(isset($_REQUEST['goback'])){
    header("Location: ../../view/medical_assist/homepage.php");
}
?>
