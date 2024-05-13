<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/indexStyle.css">
</head>

<body>

    <div class="header">
        <a href="index.php" class="logo"><img src="../upload/logo.png" alt="HTML tutorial" style="width:60px;height:60px;"></a>
        <a href="#default" class="logo">Online Healthcare</a>

        <div class="header-right">
            <a href="index.php">Home</a>
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
            <a href="findDoctors.php">Find Doctors</a>

        </div>

    </div>
</body>
<br><br>

<body class="contactbody">



    <div class="container">
        <h3>Contact Form</h3>
        <form action="/action_page.php">
            <label> Full Name</label>
            <input type="text" id="fname" name="name">
            <label>Email</label>
            <input type="text" id="lname" name="lastname">
            <label>Contact Number</label>
            <input type="text" id="lname" name="lastname">
            <label>Your queries</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
<footer class="footer">
    <div class="">
        <a href="about_us.php">About Us</a>
        <a class="active" href="contact.php">Contact Us</a>
    </div>
</footer>

</html>