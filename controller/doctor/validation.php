<?php
//include '../model/db.php';

$fname=$lname=$email=$gender=$cat=$pnumber =$lnumber= $place=$pass=$haserror="";
$fnameError=$lnameError=$emailError=$genderError=$catError=$pnumberError =$lnumberError= $placeError =$passError="";

if(isset($_REQUEST['SUBMIT'])){


 
  if (!empty($_REQUEST['lname'])) {

    if (!preg_match("/^[A-Za-z ]{1,50}$/", $_REQUEST['lname'])) {
        $haserror=1;
        $lnameError = "Please enter a valid name with at least 50 alphabetic characters";
    }
    else{
        $lname= $_REQUEST['lname'];
    }
} 
else {
    
    $lnameError = "Last Name is required";
}

  if (!empty($_REQUEST['fname'])) {

    if (!preg_match("/^[A-Za-z ]{1,50}$/", $_REQUEST['fname'])) {
        $haserror=1;
        $fnameError = "Please enter a valid name with at least 50 alphabetic characters";
    }
    else{
        $fname= $_REQUEST['fname'];
    }
} 

else {
   
    $fnameError = "First Name is required";
}
 if(!empty($_REQUEST['email']))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST['email']))
{ 
    $haserror=1;
    $emailError= "please enter a valid email address";

}
else{
    $email= $_REQUEST['email'];
}

}
else{
   
    $emailError= "Email is Required";
}
if (!empty($_REQUEST['pass'])) {

    if (strlen($pass) < 6 && !preg_match("/[a-z]/",$_REQUEST['pass'])) {
        $haserror=1;
        $passError = "Password must be at least 6 characters long and contain at least one lowercase character";
    } 
    else{
        $pass= $_REQUEST['pass'];
    }
} else {
    
    $passError = "Password is required";
}
if (!empty($_REQUEST['pnumber'])) {

    if (!preg_match("/^0/", $_REQUEST['pnumber'])) {
        $haserror=1;
        $pnumberError = "Phone number must start with 0";
    } else {
        $pnumber= $_REQUEST['pnumber'];
    }
} else {
    
    $pnumberError = "Phone number is required";
}



if (!empty($_REQUEST['lnumber'])) {
    $lnumber = $_REQUEST['lnumber'];
} else {
    $haserror=1;
    $lnumberError = "Enter Licence number";
}

if (!empty($_REQUEST['place'])) {
    $place = $_REQUEST['place'];
} else {
    $haserror=1;
    $placeError = "Enter Work address";
}

if($haserror!=1){
    echo "php validation done";
}

else{
    echo "Please complete the validation ";
}

}



?>