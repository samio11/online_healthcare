<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <div class="main">
        <h1>Profile Information</h1>
        <form action=""  method="POST">
      
            <label for="name">Name:<input type="text" id="name" name="name" placeholder="<?php echo $_SESSION['name'] ?>" disabled></label>
            <label for="email">email:<input type="text" id="email" name="email" placeholder="<?php echo $_SESSION['email'] ?>" disabled></label>
            <label for="phone">Phone:<input type="text" id="phone" name="phone" placeholder="<?php echo $_SESSION['phone'] ?>" disabled></label>
            <label for="gender">Gender:<input type="text" id="gender" name="gender" placeholder="<?php echo $_SESSION['gender'] ?>" disabled></label>
            <label for="address">Address:<input type="text" id="address" name="address" placeholder="<?php echo $_SESSION['address'] ?>" disabled></label>
            <label for="dob">Date of Birth:<input type="text" id="dob" name="dob" placeholder="<?php echo $_SESSION['dob'] ?>" disabled></label>            
            <label for="password"> Password:<input type="password" id="password" name="password" placeholder="Enter your Password" required></label>
            <div class="wrap"> <button type="submit" name="update" id="update">Update Information</button></div>
        </form>
    </div>
</body>

</html>