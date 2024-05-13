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
            <a class="active" href="#home">Home</a>
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

    <div style="padding-left:20px">
        <h2>Automatic Slideshow</h2>
        <p>Change image every 2 seconds:</p>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../upload/logo.png" style="width:150px;height:150px;">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../upload/doctorphotohasna@gmail.comdownload.jpg" style="width:150px;height:150px;">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img_mountains_wide.jpg" style="width:100%">
                <div class="text">Caption Three</div>
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
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>
   


    <style>
       
        .footer {
            background-color: #333; 
            color: #fff; 
            padding: 40px; 
            text-align: center; 
        }

        .footer a {
            color: #fff; 
            text-decoration: none; 
            margin: 0 20px;
        }
    </style>
</head>


    <footer class="footer">
        <div>
        <a href="about_us.php">About Us</a>
            <a href="#">Contact Us</a> 
        </div>
    </footer>
    
</body>
</html>



</body>

</html>