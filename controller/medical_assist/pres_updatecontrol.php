<?php
include '../../model/medical_assist_db.php';
session_start();
$haserror = $updatedP_Name = $updatedEmail = $updatedAppoDate = $updatedD_Name =$updatedMed =$updatedTests = $p_nameError= $p_emailError = $appdateError = $d_nameError= $medError =$testsError = "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ViewPresc($conObj, $_SESSION["pres_id"]);
if ($result) {

    $_SESSION["p_name"] = $result["p_name"];
    $_SESSION['p_email'] = $result['p_email'];
    $_SESSION['appdate'] = $result['appdate'];
    $_SESSION['d_name'] = $result['d_name'];
    $_SESSION['med'] = $result['med'];
    $_SESSION['tests'] = $result['tests'];


}


if (isset($_REQUEST['cancel'])) {
    header('Location: ../../view/medical_assist/profile.php');
}

if (isset($_REQUEST['confirm'])) {

    $updatedP_Name= $_REQUEST['updatedP_Name'];
    $updatedEmail  = $_REQUEST['updatedEmail '];
    $updatedAppoDate = $_REQUEST['updatedAppoDate'];
    $updatedD_Name = $_REQUEST['updatedD_Name'];
    $updatedMed = $_REQUEST['updatedMed'];
    $updatedTests = $_REQUEST['updatedTests'];


if(strlen($_REQUEST['updatedP_Name'])<2 ){
        $p_nameError= " Name should be atleast 2 characeters";
        $haserror=1;
       }

if(!empty($_REQUEST['updatedEmail']))
{       $p_emailError= "Please fill up Email";
        $haserror=1;
}
if(!empty($_REQUEST['updatedAppoDate'])){
   
    $appdateError= "Select an option";
    $haserror=1;
  }
  if(!empty($_REQUEST['updatedD_Name'])){
   
     $d_nameError= "Enter doctor's name";
     $haserror=1;
  } 
if(!empty($_REQUEST['updatedMed'])){
     $medError= "Enter Prescribed Medicines";
     $haserror=1;
  }   
if(!empty($_REQUEST['updatedTests'])){
     $testsError= "Enter Prescribed Tests";
     $haserror=1;
  } 





        if ($hasError != 1) {
            $result = $mydb->Presc_update($conObj, $_SESSION['pres_id'], $updatedP_Name, $updatedEmail ,$updatedAppoDate ,$updatedD_Name, $updatedMed, $updatedTests);
        if ($result) {
            echo "Successfully Updated";
        } else {
            echo "Error updating profile";
        }
        header('Location: ../../view/medical_assist/view_pres.php');
        exit; 
      } else {
        echo "Please correct the validation errors.";
      }
}
?>