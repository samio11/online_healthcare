<?php
include '../../model/patient_db.php';
//session_start();

$hasError='';
if(isset($_REQUEST['update'])){
    echo "upadte";
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->updateProfile($conObj, $_SESSION['email'],$_REQUEST['password'],$_REQUEST['name'],
                                    $_REQUEST['phone'], $_REQUEST['address']);
    if($result){
        header("Location: homepage.php");
        echo "updated successfully";

    }
    
}

if(!empty($_FILES['uploadphoto']['name']))
{
    $hasError=1;
    $photo="";
    $photo="../../upload/patient"."photo".$_SESSION['email'].$_FILES['uploadphoto']['name'];

    move_uploaded_file($_FILES['uploadphoto']['tmp_name'],$photo);
}
else{

}

if($hasError==1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadDocument($conobj,$_SESSION['email'], $photo);
    if($result)
    {
        header("Location: homepage.php");
    }
    else{
        echo "Error Occurred";
        }
}

 ?>