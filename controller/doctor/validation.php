<?php
include '../../model/doctor_db.php';

$fname=$lname=$email=$gender=$cat=$pnumber =$lnumber= $place=$pass=$hasError="";
$fnameError=$lnameError=$emailError=$genderError=$catError=$pnumberError =$lnumberError= $placeError =$passError="";

if(isset($_REQUEST['SUBMIT'])){


 
  if (!empty($_REQUEST['lname'])) {

    if (!preg_match("/^[A-Za-z ]{1,50}$/", $_REQUEST['lname'])) {
        $hasError=1;
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
        $hasError=1;
        $fnameError = "Please enter a valid name with at least 50 alphabetic characters";
    }
    else{
        $fname= $_REQUEST['fname'];
    }
} 

else {
   
    $fnameError = "First Name is required";
}
 /*if(!empty($_REQUEST['email']))
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
}*/
if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
    $emailError = "Enter a valid email address ";
    $hasError=1;
} else {
    $email = $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->checkEmail($conObj, $email);
    if($result)
        {
         
            $emailError = "Enter already in use ";
            $hasError=1;   
        }  
}
if (!empty($_REQUEST['pass'])) {

    if (strlen($pass) < 6 && !preg_match("/[a-z]/",$_REQUEST['pass'])) {
        $hasError=1;
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
        $hasError=1;
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
    $hasError=1;
    $lnumberError = "Enter Licence number";
}

if (!empty($_REQUEST['place'])) {
    $place = $_REQUEST['place'];
} else {
    $hasError=1;
    $placeError = "Enter Work address";
}

if($hasError!=1)
    {  
        
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->AddDocInfo($conObj, $_REQUEST['fname']."".$_REQUEST['lname'], $_REQUEST['email'],$_REQUEST['gender'], $_REQUEST['cat'], 
                                $_REQUEST['pnumber'],$_REQUEST['lnumber'], $_REQUEST['place'],$_REQUEST['pass']);
   /* if($result > 0)
    {
        echo "Successfully Registered done!!";
    }
    else{
        echo "Please complete the validation ";
    }*/
    if ($result > 0) {
        echo '<div id="registrationMessage" style="color: green;">Successfully Registered done!!</div>';
    } else {
        echo '<div id="registrationMessage" style="color: red;">Please complete the validation</div>';
    }
}
    

    



}



?>