<?php
// Check if form is submitted
if(isset($_POST['upload'])) {
    // Define upload directory
    $uploadDir = "C:\\xampp\\htdocs\\documents\\";

    // Get document name and file
    $documentName = $_POST['document_name'];
    $documentFile = basename($_FILES["document_file"]["name"]);
    $targetFile = $uploadDir . $documentFile;

    // Upload the file
    if (move_uploaded_file($_FILES["document_file"]["tmp_name"], $targetFile)) {
        // File uploaded successfully
        // Save document details to database if needed
        // Redirect to document section page
        header("Location: ../../view/doctor/doctor_files.php");
        exit();
    } else {
        // Error uploading file
        echo "Sorry, there was an error uploading your file.";
    }
}


// Define the directory where uploaded documents are stored
$uploadDir = "C:\\xampp\\htdocs\\documents\\";

// Get a list of all files in the directory
$files = scandir($uploadDir);

// Remove . and .. from the list
$files = array_diff($files, array('.', '..'));

// Display each file as a hyperlink


?>

