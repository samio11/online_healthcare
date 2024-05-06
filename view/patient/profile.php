<?php 
include "../../controller/patient/updateControl.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <div class="main">
        <h1>Profile Information</h1>
        <form action=""  method="POST" enctype="multipart/form-data" onsubmit="return updateProfileValidate()">
            <div class="wrap">
            
                <img src="<?php echo $_SESSION['url']; ?>"  width="300" height="300" id="imgsrc" name="imgsrc">
                </div>
                <input type="file" id="uploadphoto" name="uploadphoto" onchange="this.form.submit()" style="display: none;">
                <div class="wrap"
                <table><tr><td><button type="button" id="remove" onclick="removePicture('<?php  echo $_SESSION['email']; ?>')">Remove Picture</button></td>
                <td></td> <p id="demo"></p>
                <td><button type="button" id="uploadbutton" name="uploadbutton" onclick="openDiag()">Add profile picture</button></td></tr>
                </table> </div> 
            <label for="name">Name:<input type="text" id="name" name="name" value="<?php echo $_SESSION['name'] ?>" ><p id="nameError"></p></label>
            <label for="email">email:<input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" disabled></label>
            <label for="phone">Phone:<input type="text" id="phone" name="phone" value="<?php echo $_SESSION['phone'] ?>" ><p id="phoneError"></p></label>
            <label for="gender">Gender:<input type="text" id="gender" name="gender" value="<?php echo $_SESSION['gender'] ?>" disabled></label>
            <label for="address">Address:<input type="text" id="address" name="address" value="<?php echo $_SESSION['address'] ?>" ><p id="addressError"></p></label>
            <label for="dob">Date of Birth:<input type="text" id="dob" name="dob" value="<?php echo $_SESSION['dob'] ?>" disabled></label>            
            <label for="password"> Password:<input type="password" id="password" name="password" placeholder="Enter your Password" ></label>
            <div class="wrap"> <button type="submit" name="update" id="update" >Update Information</button></div>
        </form>
    </div>
</body>

</html>