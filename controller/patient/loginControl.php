<?php
include '../../model/patient_db.php';
session_start();
if (isset($_SESSION['csrf_token'])) {
    if (isset($_REQUEST['login'])) {
        if ($_REQUEST['csrf_token'] == $_SESSION['csrf_token']) {
            unset($_SESSION['csrf_token']);
            $_SESSION['email'] = $_REQUEST['email'];
            $mydb = new Model();
            $conObj = $mydb->OpenCon();
            $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
            if ($result) {
                $_SESSION['p_id'] = $result['p_id'];
                $_SESSION['flag'] = true;
                header("Location: ../../view/patient/homepage.php");
            } else echo "not valid";
        } else echo "Token not valid";
    }
} else {
    //setcookie('csrf_token', bin2hex(random_bytes(32)), time()+30);  
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
