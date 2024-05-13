<?php
include '../../model/medical_assist_db.php';
session_start();
$haserror = $updatedPhone = $updatedPassword = $updatedName = $updatedAddress =$passwordError = $nameError = "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewProfile($conObj, $_SESSION["email"]);
if ($result) {

    $_SESSION['name'] = $result['name'];
    $_SESSION['phone'] = $result['phone'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['address'] = $result['address'];


}


if (isset($_REQUEST['cancel'])) {
    header('Location: ../../view/medical_assist/profile.php');
}

if (isset($_REQUEST['confirm'])) {

    $updatedName = $_REQUEST['updatedName'];
    $updatedPhone = $_REQUEST['updatedPhone'];
    $updatedPassword = $_REQUEST['updatedPassword'];
    $updatedAddress = $_REQUEST['updatedAddress'];



    if (!strlen($_REQUEST['updatedName']) > 4) {
        $nameError = "Type Name";
        $haserror = 1;
    }
        
       
    if (strlen($updatedPassword) >= 4 && !preg_match("/[A-Z]/",$_REQUEST['updatedPassword'])) {
        $passwordError = " Password must be at least 4 characters and an uppercase";
        $haserror = 1;
    }

    
    

        if ($haserror != 1) {
            $result = $mydb->UpdateProfile($conObj, $_SESSION['email'], $updatedName, $updatedPhone, $updatedPassword,$updatedAddress);
            if ($result) {
                echo "Successfully Updated";
            } else {
                echo "Error updating profile";
            }
            header('Location: ../../view/medical_assist/profile.php');
            exit; 
          } else {
            echo "Please correct the validation errors.";
          }
 }

?>