<?php
  include "../../model/medical_assist_db.php";
    $email= $_GET['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->removePicture($conObj, $email);
    if ($result) {
        echo "Picture Deleted Successfully.";
    } else {
        echo "Error occurred while Deleting the Picture.";
    }
?>