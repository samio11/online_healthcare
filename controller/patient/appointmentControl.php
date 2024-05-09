<?php
include '../../model/patient_db.php';
session_start();
$d_id =  $_GET['d_id'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$patientResult = $mydb->ShowProfile($conObj, $_SESSION['email']);
if ($patientResult) {
    $_SESSION['patientName'] = $patientResult['name'];
    $_SESSION['patientGender'] = $patientResult['gender'];
    $_SESSION['patientAddress'] = $patientResult['address'];
}
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->doctor($conObj, $d_id);
if ($result) {
    $_SESSION['dname'] = $result['name'];
    $_SESSION['cat'] = $result['cat'];
    $_SESSION['gender'] = $result['gender'];
}
if (isset($_REQUEST['confirm'])) {
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $patientResult = $mydb->ShowProfile($conObj, $_SESSION['email']);
    if ($patientResult) {
        $_SESSION['patientName'] = $patientResult['name'];
        $_SESSION['patientGender'] = $patientResult['gender'];
        $_SESSION['patientAddress'] = $patientResult['address'];
    }
    $result = $mydb->reqAppointment(
        $conObj,
        $_SESSION['p_id'],
        $_SESSION['patientName'],
        $_SESSION['patientGender'],
        $_SESSION['patientAddress'],
        $d_id,
        $_SESSION['dname'],
        $_SESSION['cat'],
        $_SESSION['gender'],
        $_REQUEST['time'],
        $_REQUEST['note']
    );
    if ($result == 1) {
        header("Location: ../../view/patient/homepage.php");
    } else echo "failed";
}
