<?php
include '../models/mydb.php';

session_start();
$updatedName=$updatedPassword=$updatedPhoneNumber=$updatedNation="";
$passwordError=$phonenumberError=$haserror= "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->getUserInfo($conObj, $_SESSION['Email']);
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()){
            
        $_SESSION['Name'] = $row['name'];
        $_SESSION['Password'] = $row['password'];
        $_SESSION['Phonenumber'] = $row['phonenumber'];
        $_SESSION['Nationality'] = $row['nationselect'];
        
      }

}

if(isset($_REQUEST['cancel'])){
    header('Location: ../view/profile.php');
  }
  
if(isset($_REQUEST['confirmChanges'])){
/*
  if( is_numeric($_REQUEST['updatedPhoneNumber'])){
        $updatedPhoneNumber= $_REQUEST['updatedPhoneNumber'] ;
    }
     else{
    $phonenumberError= "Phone Number invalid";
    $haserror=1;
     }
if(strlen($_REQUEST['updatedPassword'])>6 || preg_match('/(A-Z)/',$_REQUEST['updatedPassword']))
{
                
    $updatedPassword= $_REQUEST['updatedPassword'] ;
               
}
else{
     $passwordError= " Password must be at least 6 characters and an uppercase";
     $haserror=1;
    }
*/    

//if($haserror!=1){
    $mydb= new Model();
    $conObj= $mydb->OpenCon();
    $result = $mydb->UpdateProfile($conObj,$_SESSION["email"], $_REQUEST["updatedName"], $_REQUEST["updatedPhoneNumber"], $_REQUEST["updatedPassword"],$_REQUEST["updatedNation"]);
    if($result === TRUE)
    {
        echo "Successfully Updated";
        header('Location: ../view/profile.php');
        
        
    }
    else{
        echo "Please update with proper informations!";
    }
  }
  
  ?>