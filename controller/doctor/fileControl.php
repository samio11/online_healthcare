<?php

if(isset($_POST['upload'])) {
   
    $uploadDir = "C:\\xampp\\htdocs\\documents\\";

   
    $documentName = $_POST['document_name'];
    $documentFile = basename($_FILES["document_file"]["name"]); //extract original file name
    $targetFile = $uploadDir . $documentFile;

  
    if (move_uploaded_file($_FILES["document_file"]["tmp_name"], $targetFile)) {
      
        header("Location: ../../view/doctor/doctor_files.php");
        exit();
    } else {
       
        echo "Sorry, there was an error uploading your file.";
    }
}


//view
$uploadDir = "C:\\xampp\\htdocs\\documents\\";

$files = scandir($uploadDir);

$files = array_diff($files, array('.', '..'));




?>

