<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/indexStyle.css">
</head>

<body >

    <div class="header">
        <a href="index.php" class="logo"><img src="../upload/logo.png" alt="HTML tutorial" style="width:60px;height:60px;"></a>
        <a href="#default" class="logo">Online Healthcare</a>

        <div class="header-right">
            <a href="#home">Home</a>
            <a href="#contact">Find Doctors</a>
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
</body>

<body class="contactbody" >


<h3>Contact Form</h3>
    <div class="container">
        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

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