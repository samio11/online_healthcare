<?php
include '../../model/medical_assist_db.php';
$p_name=$p_email=$p_gender=$height=$weight=$bg=$dia=$appdate=$d_name=$med=$tests="";
$haserror=$p_nameError=$p_emailError=$p_genderError=$heightError=$weightError=$bgError=$diaError=$appdateError=$d_nameError=$medError=$testsError="";

if(isset($_REQUEST['submitPrescription'])){
   
   
 if(strlen($_REQUEST['PatientName'])<2 ){
        $$p_nameError= " Name should be atleast 2 characeters";
        $haserror=1;
       }
        else{
        $p_name= $_REQUEST['PatientName'] ;
        }

 if(!empty($_REQUEST['PatientEmail']))
{
  $p_email= $_REQUEST['PatientEmail'];
}
else{
  $p_emailError= "Please fill up Email";
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
if(!empty($_REQUEST["BloodGroup"])){
            $bg=$_REQUEST['BloodGroup'];
          }
          else{
            $bgError= "Fill up with Blood group";
            $haserror=1;
          }  
if(!empty($_REQUEST['Diabetes'])){
            $dia=$_REQUEST['Diabetes'];
          }
          else{
            $diaError= "Select an option";
            $haserror=1;
          }   
if(!empty($_REQUEST['appointment'])){
            $appdate=$_REQUEST['appointment'];
          }
          else{
            $appdateError= "Select an option";
            $haserror=1;
          }
if(!empty($_REQUEST["Gender"])){
            $p_gender=$_REQUEST['Gender'];
            
          }
          else{
             $p_genderError= "Select gender";
             $haserror=1;
          }   

if(!empty($_REQUEST['appointedDoc'])){
            $d_name=$_REQUEST['appointedDoc'];
          }
          else{
             $d_nameError= "Enter doctor's name";
             $haserror=1;
          } 
if(!empty($_REQUEST['PrescribedMed'])){
            $med=$_REQUEST['PrescribedMed'];
          }
          else{
             $medError= "Enter Prescribed Medicines";
             $haserror=1;
          }   
if(!empty($_REQUEST['diseaseTest'])){
            $tests=$_REQUEST['diseaseTest'];
          }
          else{
             $testsError= "Enter Prescribed Tests";
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