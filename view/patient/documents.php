<?php session_start(); ?>
<html>
    <body>
        <h2>Upload Documents</h2>
        <form method="POST" action='' enctype="multipart/form-data">
        <table>
           <tr><td>Profile Picture: </td><td><input type="file" name="photo"> </td></tr>
           <tr><td><input type="submit" name="upload" value="Upload"></td></tr>
           
        </table>
        </form>
    </body>
</html>