<?php
 include '../../model/patient_db.php';
$name = $email = $phone  =$dob=$password=$address=$city=$postal= "";
$nameError = $emailError = $phoneError =$dobError=$passwordError=$hasError="";
if(isset($_REQUEST['login'])){
    header("Location: ../../view/patient/login.php");
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
        {  
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->AddPatient($conObj, $_REQUEST['name'], $_REQUEST['email'],$_REQUEST['password'], $_REQUEST['gender'], 
                                    $_REQUEST['phone'],$_REQUEST['dob'], $_REQUEST['marital'],$_REQUEST['street'].$_REQUEST['city']."Postal: ".$_REQUEST['postal']);
        if($result > 0)
        {
            echo "success";
        }
            else echo "not valid";
    }

}
}
