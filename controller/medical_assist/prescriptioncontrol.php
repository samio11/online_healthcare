<?php
include '../../model/medical_assist_db.php';
$name=$email=$gender=$height=$weight=$diabetes=$genderselect=$appoinDoc=$prescMed=$diseasetest="";
$nameError=$emailError=$haserror=$genderselectError=$heightError=$weightError=$diabetesError=$appoinDocError=$prescMedError=$diseasetestError="";

if(isset($_REQUEST['submitPrescription'])){
   
   
 if(strlen($_REQUEST['PatientName'])<2 ){
        $nameError= " Name should be atleast 2 characeters";
        $haserror=1;
       }
        else{
        $name= $_REQUEST['PatientName'] ;
        }

 if(!empty($_REQUEST['PatientEmail']))
{
    $emailError= "Please fill up Email";
    $haserror=1;

}
else{
    $email= $_REQUEST['PatientEmail'];
}
if(!empty($_REQUEST["Height"])){
            $height=$_REQUEST['Height']; 
            $heightError= "Fill up with a height";
             $haserror=1;
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

if(!empty($_REQUEST['appointedDoc'])){
            $appoinDoc=$_REQUEST['appointedDoc'];
          }
          else{
             $appoinDocError= "Enter doctor's name";
             $haserror=1;
          } 
if(!empty($_REQUEST['PrescribedMed'])){
            $prescMed=$_REQUEST['PrescribedMed'];
          }
          else{
             $prescMedError= "Enter Prescribed Medicines";
             $haserror=1;
          }   
if(!empty($_REQUEST['diseaseTest'])){
            $diseasetest=$_REQUEST['diseaseTest'];
          }
          else{
             $diseasetestError= "Enter Prescribed Tests";
             $haserror=1;
          } 


          if($haserror!=1){ 
            $mydb = new Model();
            $conObj = $mydb->OpenCon();
            $result = $mydb->AddPrescription($conObj,$p_name,$p_email,$p_gender,$height,$weight,$bg,$dia,$appdate,$d_name,$med,$tests);
            if($result < 0)
            {
                echo "Invalid Prescription Entry";
            }
                else echo "Successful Entry";
        
    }
}
?> 