<?php
include '../../model/medical_assist_db.php';
$name = $email = $password = $phone = $gender = $address = $nationselect = $license = $dob = "";
$haserror = $nameError = $emailError = $passwordError = $phoneError = $addressError = $licenseError = $nationselectError = $genderError = $dobError = "";

if (isset($_REQUEST['Submit'])) {
    $password = $_REQUEST['Password'];

    if (strlen($_REQUEST['Name']) < 4) {
        $nameError = " Name should be atleast 4 characters";
        $haserror = 1;
    } else {
        $name = $_REQUEST['Name'];
    }
    if (!filter_var($_REQUEST['Email'], FILTER_VALIDATE_EMAIL)){
        $emailError = "Enter a valid email address ";
        $haserror=1;
} else {
        $email = $_REQUEST['Email'];
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->checkEmail($conObj, $email);
        if($result)
            {
                $emailError = "This Email is already registered:";
                $haserror=1;   
            }  
}

    if (strlen($password) > 6 || preg_match('/(A-Z)/', $password)) {

        $password = $_REQUEST['Password'];

    } else {
        $passwordError = " Password must be at least 6 characters and an uppercase";
        $haserror = 1;
    }
    if (is_numeric($_REQUEST['Phone'])) {
        $phone= $_REQUEST['Phone'];
    } else {
        $phoneError = "Phone Number invalid";
        $haserror = 1;

    }
    if (!empty($_REQUEST["Address"])) {
        $address = $_REQUEST['Address'];
    } else {
        $addressError = "Enter an address";
        $haserror = 1;
    }
    if (!empty($_REQUEST['License'])) {
        $license = $_REQUEST['License'];
    } else {
        $licenseError = "Enter a License address";
        $haserror = 1;
    }

    if (!empty($_REQUEST["Nationality"])) {
        $nationselect = $_REQUEST['Nationality'];
        
    } else {
        $nationselectError = "Select nation";
        $haserror = 1;
    }
    if (!empty($_REQUEST["dob"])) {
        $dob = $_REQUEST['dob'];

    } else {
        $dobError = "Select Date of Birth";
        $haserror = 1;
    }
    if (!empty($_REQUEST["Gender"])) {
        $gender= $_REQUEST['Gender'];

    } else {
        $genderError = "Select gender";
        $haserror = 1;
    }

    
    if($haserror!=1){ 
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->AddMedical_assist($conObj,$name,$email,$password,$phone,$gender,$address,$license,$dob,$nationselect);
        if($result < 0)
        {
            echo "Invalid Registration";
        }
            else echo "Successful";
    
}
}
?>