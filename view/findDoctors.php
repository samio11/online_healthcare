<?php include "../controller/findDocControl.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Doctor's List</title>

    <link rel="stylesheet" href="../css/indexStyle.css">
</head>

<body>
    <div class="header">
        <a href="index.php" class="logo"><img src="../upload/logo.png" alt="HTML tutorial" style="width:60px;height:60px;"></a>
        <a href="#default" class="logo">Online Healthcare</a>

        <div class="header-right">
            <a href="index.php">Home</a>
            <a class="active" href="findDoctors.php">Find Doctors</a>
            <a href="#contact">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="http://localhost/online_healthcare/view/patient/login.php">Patient</a>
                    <a href="http://localhost/online_healthcare/view/doctor/login.php">Doctor</a>
                    <a href="#">Medical <br>Assistant</a>
                </div>
            </div>
            <a href="#about">About</a>
        </div>

    </div>


    <br>
    <div>
        <h1 style="color:#5b9aff; text-align :center;">Doctor's List</h1>


        <table class="customTable">

            <thead class="doctor">
                <th>Name</th>
                <th>Speciality</th>
                <th>Gender</th>
                <th>Workplace</th>

            </thead>
            <tbody id="searchresult">
                <?php echo $str ?>
            </tbody>
        </table>
        
    </div>


</body>
<footer class="footer">
    <div class="">
        <a href="about_us.php">About Us</a>
        <a href="contact.php">Contact Us</a>
    </div>
</footer>
</html>