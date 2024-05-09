<?php
  include "../../model/doctor_db.php";
    $email= $_GET['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->removePicture($conObj, $email);
    if ($result) {
        echo "Picture has been deleted successfully.";
    } else {
        echo "Error occurred while deleting the picture.";
    }
?>