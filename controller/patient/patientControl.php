<?php
 include '../models/mydb.php';
$name = $email = $phone  =$dob=$password=$address=$city=$postal= "";
$nameError = $emailError = $phoneError =$dobError=$passwordError=$hasError="";
if(isset($_REQUEST['login'])){
    header("Location: ../view/login.php");
}
if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    if (preg_match("/^[a-zA-z]*$/",$_REQUEST['name']) && !empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }else {
        $nameError = "Name must be filled with alphabets and whitespace";
        $hasError=1;
    }

    if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
            $emailError = "Enter a valid email address ";
            $hasError=1;
    } else {
            $email = $_REQUEST['email'];   
    }

    if (strlen($_REQUEST['phone'])==11) {
        $phone = $_REQUEST['phone'];
    } else {
        $phoneError = "Enter  11 digit phone number";
        $hasError=1;
    }
    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',$_REQUEST['password'])){
        $passwordError = "Invalid Password";
        $hasError=1;
        
    } else {
            $password = $_REQUEST['password'];
    }

    if(!empty($_REQUEST['dob'])){
        $dob = $_REQUEST['dob'];
    }
    else {
        $dobError = "Enter DOB";
        $hasError=1;
    }

    if($hasError!=1){
        echo "php Validation done";
    }
    else echo "validation failed";


}
