 <?php
include '../models/mydb.php';
include '../view/documents.php';
//session_start();
$hasError="";

if(empty( $_FILES['photo']['name']) && empty( $_FILES['nid']['name']) && empty( $_FILES['medical']['name']))
{
    echo "No file uploaded";
    $hasError=1;
}
else{
    $photo=$nid=$medical="";
    $photo="../upload/"."photo".$_SESSION['email'].$_FILES['photo']['name'];
    $nid="../upload/"."nid".$_SESSION['email'].$_FILES['nid']['name'];
    $medical="../upload/"."medical".$_SESSION['email'].$_FILES['medical']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
    move_uploaded_file($_FILES['nid']['tmp_name'],$nid);
    move_uploaded_file($_FILES['medical']['tmp_name'],$medical);
}

if($hasError!=1)
{
    $mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->UploadDocument($conobj,$_SESSION['email'], $photo, $nid, $photo);
    if($result===TRUE)
    {
        echo "Successfully Uploaded";
    }
    else{
        echo "Error Occurred".$conobj->error;
    }
}
?>