 <?php
include '../../model/patient_db.php';
include '../../view/patient/documents.php';
//session_start();
$hasError="";

if(empty( $_FILES['photo']['name']))
{
    echo "No file uploaded";
    $hasError=1;
}
else{
    $photo="";
    $photo="../../upload/patient"."photo".$_SESSION['email'].$_FILES['photo']['name'];

    move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
}

if($hasError!=1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadDocument($conobj,$_SESSION['email'], $photo);
    if($result==1)
    {
        echo "Successfully Uploaded";
    }
    else{
        echo "Error Occurred";
        }
}
?>