<?php
include '../../model/patient_db.php';

if (isset($_REQUEST['update'])) {
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->addInfo($conObj, $_SESSION['email'], $_REQUEST['height'], $_REQUEST['weight'], $_REQUEST['blood'], $_REQUEST['diabetes']);
    if ($result == 1) {
        header("Location: ../../view/patient/homepage.php");
    }
}
