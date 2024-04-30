<?php
include '../models/mydb.php';
$name=$email=$gender=$height=$weight=$diabetes=$genderselect=$ChoosenDoctor="";
$nameError=$emailError=$haserror=$genderselectError=$heightError=$weightError=$diabetesError=$choosenDoctorError="";

if(isset($_REQUEST['submitPortfolio'])){
   
   
 if(strlen($_REQUEST['PatientName'])<2 ){
        $nameError= " Name should be atleast 2 characeters";
        $haserror=1;
       }
       else{
        $name= $_REQUEST['PatientName'] ;
        }
 if(!empty($_REQUEST['PatientEmail']))
{
   if(!preg_match('/aiub.edu/',$_REQUEST["PatientEmail"]))
{
    $emailError= "Please enter a valid email address with aiub.edu";
    $haserror=1;

}
else{
    $email= $_REQUEST['PatientEmail'];
}

}
else{
    $emailError= "Email is Required";
    $haserror=1;
}

if(!empty($_REQUEST["Height"])){
            $height=$_REQUEST['Height'];
          }
          else{
             $heightError= "Fill up with a height";
             $haserror=1;
          } 
if(!empty($_REQUEST["Weight"])){
            $weight=$_REQUEST['Weight'];
          }
          else{
             $weightError= "Fill up with weight";
             $haserror=1;
          }    
if(!empty($_REQUEST['Diabetes'])){
            $diabetes=$_REQUEST['Diabetes'];
          }
          else{
            $diabetesError= "Select an option";
             $haserror=1;
          }   

if(!empty($_REQUEST["Gender"])){
            $genderselect=$_REQUEST['Gender'];
            
          }
          else{
             $genderselectError= "Select gender";
             $haserror=1;
          }   

 if(!empty($_REQUEST['ChoosenDoctor'])){
            $ChoosenDoctor=$_REQUEST['ChoosenDoctor'];
          }
          else{
            $choosenDoctorError= "Enter doctor's name";
             $haserror=1;
          }  


if($haserror!=1){
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->InsertPortfolio($conobj,$_REQUEST["PatientName"],$_REQUEST["PatientEmail"],$genderselect,$_REQUEST["Height"],$_REQUEST["ChoosenDoctor"]);
    if($result===TRUE)
    {
        echo "Successfully Added";
    }
    
    
    else{
        echo "Please complete the validation ";
    }
    

}
}
?> 