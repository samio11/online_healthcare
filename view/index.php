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
            <a class="active" href="index.php">Home</a>
            <a href="findDoctors.php">Find Doctors</a>
            <a href="http://localhost/online_healthcare/view/patient/login.php">Need Appoitment?</a>
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="http://localhost/online_healthcare/view/patient/login.php">Patient</a>
                    <a href="http://localhost/online_healthcare/view/doctor/login.php">Doctor</a>
                    <a href="http://localhost/online_healthcare/view/medical_assist/login.php">Medical <br>Assistant</a>
                </div>
            </div>


        </div>

    </div>
</body>
<br><br>

<body>
    <div style="padding-left:00px">


        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../upload/1.jpg">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../upload/2.jpg">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../upload/3.jpg">

            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
        </script>

    </div>

</body>








<footer class="footer">
    <div class="">
        <a href="about_us.php">About Us</a>
        <a href="contact.php">Contact Us</a>
    </div>
</footer>


</html>