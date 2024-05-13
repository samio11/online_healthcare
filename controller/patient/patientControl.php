<?php
include '../../model/patient_db.php';
if (!isset($_COOKIE['first_visit'])) {
    setcookie('first_visit', 'welcome', time() + 1800);
    echo "<script>alert('PLEASE PROVIDE YOUR INFOMRATION CORRECTLY!')</script>";
}
$name = $email = $phone  = $dob = $password = $address = $city = $postal = "";
$nameError = $emailError = $phoneError = $dobError = $passwordError = $hasError = "";
if (isset($_REQUEST['login'])) {
    header("Location: ../../view/patient/login.php");
}
if (isset($_REQUEST['submit'])) {
    if (!preg_match("/^[a-zA-z]*$/", $_REQUEST['name']) && !empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    } else {
        $nameError = "Name must be filled with alphabets and whitespace";
        $hasError = 1;
    }
    if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Enter a valid email address(i.e. example@example.com)";
        $hasError = 1;
    } else {
        $email = $_REQUEST['email'];
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->checkEmail($conObj, $email);
        if ($result) {
            $emailError = "Enter already in use ";
            $hasError = 1;
        }
    }
    if (strlen($_REQUEST['phone']) == 11) {
        $phone = $_REQUEST['phone'];
    } else {
        $phoneError = "Enter 11 digit phone number";
        $hasError = 1;
    }
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $_REQUEST['password'])) {
        $passwordError = "Password must be 8 characters long with uppercase, lowercase, numbers, special characters";
        $hasError = 1;
    } else {
        $password = $_REQUEST['password'];
    }
    if (!empty($_REQUEST['dob'])) {
        $dob = $_REQUEST['dob'];
    } else {
        $dobError = "Enter DOB";
        $hasError = 1;
    }
    if ($hasError != 1) {
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->AddPatient(
            $conObj,
            $name,
            $email,
            $password,
            $_REQUEST['gender'],
            $phone,
            $dob,
            $_REQUEST['marital'],
            $_REQUEST['street'] . ", " . $_REQUEST['city'] . "-" . $_REQUEST['postal']
        );
        if ($result > 0) {
            header("Location: ../../view/patient/login.php");
        } else echo "Registration Failed";
    }
}
