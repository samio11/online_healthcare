<?php
include '../../model/patient_db.php';
session_start();
if (isset($_REQUEST['login'])) {
    $_SESSION['email'] = $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
    if ($result) {
        $_SESSION['p_id'] = $result['p_id'];
        $_SESSION['flag'] = true;
        header("Location: ../../view/patient/homepage.php");
    } else echo "not valid";
}
