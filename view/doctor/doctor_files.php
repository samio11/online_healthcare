<?php
include '../../controller/doctor/fileControl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Document Section</title>
   
    <link rel="stylesheet" href="../../css/doctor/uploadDoc.css">
</head>
<body>
    <table>
        <tr>
            <td>
            <h1 >Doctor Document Section</h1>
     
     
        <form action="doctor_files.php" method="post" enctype="multipart/form-data">
       
        <div class="upload-section">
            <h2>Upload New Document</h2>
            <label for="document_name">Document Name:</label>
            <input type="text" id="document_name" name="document_name" required>
            <label for="document_file">Select File:</label>
            <input type="file" id="document_file" name="document_file" accept=".pdf,.doc,.docx" required>
            <button type="submit" name="upload">Upload Document</button>
        </form>
       </div>
            </td>
            <br>
            <td>
     <div class="main">
       <div class="document-list">
           <h2>Uploaded Documents</h2>
           <ul>
               <?php
                          foreach($files as $file) {
                           echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
                   }
               ?>
           </ul>
       </div>
   </div>

            </td>
        </tr>
    </table>
 
</body>
</html>
      


