<?php
include '../../controller/doctor/fileControl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Document Section</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../../css/doctor/style.css">
</head>
<body>
    <div class="main">
        <h1>Doctor Document Section</h1>
        <p>Welcome, Dr. [Doctor's Name]!</p>
        <!-- Form to upload a new document -->
        <form action="doctor_files.php" method="post" enctype="multipart/form-data">
       
            <h2>Upload New Document</h2>
            <label for="document_name">Document Name:</label>
            <input type="text" id="document_name" name="document_name" required>
            <label for="document_file">Select File:</label>
            <input type="file" id="document_file" name="document_file" accept=".pdf,.doc,.docx" required>
            <button type="submit" name="upload">Upload Document</button>
        </form>
        <!-- Display the list of uploaded documents -->
        <h2>Uploaded Documents</h2>
        
        <ul>
            <?php
        foreach($files as $file) {
    echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
}
?>
        </ul>
    </div>
</body>
</html>
