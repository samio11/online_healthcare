<?php

//include '../control/homevalidation.php';
include '../../controller/doctor/homevalidation.php'; 


?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../js/doctor_myscript.js"></script>
    <link rel="stylesheet" href="../../css/doctor/profileDesign.css">



</head>

    <body>
    <div class="header">
    <form action="" enctype="multipart/form-data" method="POST">
        
                <td><input type="submit" name="list" value="Appointment List"></td>
                
                <td><input type="submit" name= "approved" value="Approved Appointmnets"></td>
                <td><input type="submit" name= "assist" value="Medical Assistant"></td>
                <td><input type="submit" name= "file" value="Documents"></td>
                <td><input type="submit" name= "logout" value="Logout"></td>
              
 
           
      </div>

    <div class="content">
        <div class="profile-picture-container">
            <div class="profile-picture-dialog">
    <img src="<?php echo $_SESSION['url']; ?>"  width="300" height="300" id="imgsrc" name="imgsrc">
       
       <input type="file" id="uploadphoto" name="uploadphoto" onchange="this.form.submit()" style="display: none;">
       </div> 
  
    <div class="button-container">
        

        <button type="button" id="uploadbutton" name="uploadbutton" onclick="openDiag()">Add picture</button> 
       <button type="button" id="remove" onclick="removePicture('<?php echo $_SESSION['email']; ?>')">Remove picture</button>
   
    </div>
    </div>
 
<div class="profile-info">
 <table>
    <tr>
            <td>Full Name:</td>
            <td><?php echo $result['name']; ?></td>
        </tr>
       
        <tr>
            <td>E-mail:</td>
            <td><?php echo $result['email']; ?></td>
        </tr>
        
        <tr>
            <td>Gender:</td>
            <td><?php echo $result['gender']; ?></td>
        </tr>
        
        <tr>
            <td>Category:</td>
            <td><?php echo $result['cat']; ?></td>
        </tr>
       
        <tr>
            <td>Phone Number:</td>
            <td><?php echo $result['pnumber']; ?></td>
        </tr>
       
        <tr>
            <td>Licence Number:</td>
            <td><?php echo $result['lnumber']; ?></td>
        </tr>
       
        <tr>
            <td>working Place :</td>
            <td><?php echo $result['place']; ?></td>
        </tr>
       
        <tr>
            <td>Password:</td>
            <td><?php echo $result['pass']; ?></td>
        </tr>
       
        </table>
        </div>
    </div>
    <div class="header">
        <tr>
           <td><input type="submit" name="updateProfile" value="Update Profile"></td>
       </tr>
       
        </div>
   

</form>



    </body>
   
</html>




