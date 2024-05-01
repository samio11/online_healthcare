<?php session_start(); ?>
<html>
    <body>
        <h2>Upload Documents</h2>
        <form method="POST" action='' enctype="multipart/form-data">
        <table>
           <tr><td>Photo: </td><td><input type="file" name="photo"> </td></tr>
           <tr><td>NID: </td><td><input type="file" name="nid" ></td></tr>
           <tr><td>Medical Documents: </td><td><input type="file" name="medical" ></td></tr>
           <tr><td><input type="submit" name="upload" value="Upload"></td></tr>
        </table>
        </form>
    </body>
</html>