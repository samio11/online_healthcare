<?php
include '../../controller/medical_assist/profilecontrol.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile:</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST" >
<table>
    <tr>
    <img src="<?php echo $_SESSION['url']; ?>"  width="300" height="300" id="imgsrc" name="imgsrc">
            
       <input type="file" id="uploadphoto" name="uploadphoto" onchange="this.form.submit()" style="display: none;">
        <table>
        <tr>
           
        
        <td><button type="button" id="uploadbutton" name="uploadbutton" onclick="openDiag()">Upload Profile Picture</button></td>
        <td><button type="button" id="remove" onclick="removePicture('<?php  echo $_SESSION['email']; ?>')">Remove Picture</button></td>
        </table> 
    </tr>


            <td>Name:</td>
            <td><?php echo $result['name']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>E-mail:</td>
            <td><?php echo $result['email']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Phone Number:</td>
            <td><?php echo $result['phone']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $result['gender']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Current Address:</td>
            <td><?php echo $result['address']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Valid License:</td>
            <td><?php echo $result['license']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Date Of Birth:</td>
            <td><?php echo $result['dob']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr>
            <td>Nationality:</td>
            <td><?php echo $result['nationselect']; ?></td>
        </tr>
        <tr>
                <td colspan="2"><br></td>
            </tr>
        <tr><td><input type="submit" name="updateProfile" value="Update Profile"></td>
    
       
</table>
</form>
    







