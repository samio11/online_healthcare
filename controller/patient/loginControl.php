<?php
include '../../model/patient_db.php';
session_start();
$loginError = '';
if (isset($_SESSION['csrf_token'])) {
    if (isset($_REQUEST['login'])) {
        if ($_REQUEST['csrf_token'] == $_SESSION['csrf_token']) {

            $_SESSION['email'] = $_REQUEST['email'];
            $mydb = new Model();
            $conObj = $mydb->OpenCon();
            $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
            if ($result) {
                unset($_SESSION['csrf_token']);
                $_SESSION['p_id'] = $result['p_id'];
                $_SESSION['flag'] = true;
                header("Location: ../../view/patient/homepage.php");
            } else $loginError = "Email or Password is incorrect";
        } else echo "Please refresh the page";
    }
} else {
    setcookie('csrf_token', bin2hex(random_bytes(32)), time() + 30);
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
