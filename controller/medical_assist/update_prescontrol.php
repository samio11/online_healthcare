<?php
include '../../model/medical_assist_db.php';
session_start();
$pres_id = $_GET['pres_id'];
$p_name = $p_email = $p_gender = $height = $weight = $bg = $dia = $appdate = $stime = $d_name = $haserror = $d_nameError = $p_nameError = $stimeError = $p_emailError = $p_genderError = $heightError = $weightError = $bgError = $diaError = $appdateError = "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewPresList($conObj, $pres_id);
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
   

    if (!empty($_REQUEST["patientName"])) {
        $p_name = $_REQUEST['patientName'];
    } else {
        $p_nameError = "Enter name";
        $haserror = 1;
    }

    if (!empty($_REQUEST["PatientEmail"])) {
        $p_email = $_REQUEST['PatientEmail'];
    } else {
        $p_emailError = "Enter email";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Gender"])) {
        $p_gender = $_REQUEST['Gender'];
    } else {
        $p_genderError = "Type Gender";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Height"])) {
        $height = $_REQUEST['Height'];
    } else {
        $heightError = "Type height";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Weight"])) {
        $weight = $_REQUEST['Weight'];
    } else {
        $weightError = "Type weight";
        $haserror = 1;
    }
    if (!empty($_REQUEST["BloodGroup"])) {
        $bg = $_REQUEST['BloodGroup'];
    } else {
        $bgError = "Type BloodGroup";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Diabetes"])) {
        $dia = $_REQUEST['Diabetes'];
    } else {
        $diaError = "Select Diabetes type";
        $haserror = 1;
    }
    if (!empty($_REQUEST["appointment"])) {
        $appdate = $_REQUEST['appointment'];
    } else {
        $appdateError = "Select appointment";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Timeslot"])) {
        $stime = $_REQUEST['Timeslot'];
    } else {
        $stimeError = "Select Timeslot";
        $haserror = 1;
    }
    if (!empty($_REQUEST["appointedDoc"])) {
        $d_name = $_REQUEST['appointedDoc'];
    } else {
        $d_nameError = "Select appointed Doctor";
        $haserror = 1;
    }
    if ($haserror != 1) {
        $result = $mydb->updatePresc($conObj, $_SESSION['pres_id'], $_SESSION['app_id'], $_SESSION['p_id'], $p_name, $p_email, $p_gender, $height, $weight, $bg, $dia, $appdate, $stime, $d_name, $_SESSION['prescribed'], $_SESSION['test']);
        if ($result) {
            echo "Successfully Updated";
        }
    } else {
        echo "Error updating profile";
    }
}

?>