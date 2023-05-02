<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <title>Home - STI PROWARE</title>
</head>
<body>
    <!-- HEADER -->
    <section id="header">
        <a href=""><img src="../image/logo.png" class="logo" alt=""></a>

        <div id="navbar">
            <ul>
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="index.html"><i class="fa-solid fa-house"></i></a></li>
                <li><a class="active" href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="user_acc.php"><i class="fa-solid fa-user"></i></i></a></li>
                <div class="dot"></div>
            </ul>
        </div>
    </section>

    <!-- BANNER ADVERTISEMENT -->
    <section class="banner">
        <div class="slider">
            <div class="slides">

                <!-- buttons -->
                <input type="radio" name="round-btn" id="radio1">
                <input type="radio" name="round-btn" id="radio2">
                <input type="radio" name="round-btn" id="radio3">

                <!-- images -->
                <div class="slide first">
                    <img src="../image/RED-BANNER.png" alt="">
                </div>
                <div class="slide">
                    <img src="../image/BLACK-BANNER.png" alt="">
                </div>
                <div class="slide">
                    <img src="../image/BLUE-BANNER.png" alt="">
                </div>

                <!-- automatic navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>

            </div>

            <!-- manual navigation -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>

        </div>
    </section>

    <!-- TEXT DIVIDER -->.
    
    <div class="M-title">
        <h1>STI ONLINE PROWARE</h1>

    </div>
      
    <!-- PRODUCT SECTION -->
    <section id="product-section" class="section-pad1">
        
        <div class="pd-box"><a href="senior_highschool/SH_section.php">
            <img src="../image/BOX-GRAY.png" alt=""></a>
            <h3>Senior Highschool</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>Arts & Sciences</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>Business & Management</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>Hospitality Management</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>ICT & Engineering</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>Tourism Management</h3>
        </div>

        <div class="pd-box">
            <img src="../image/BOX-GRAY.png" alt="">
            <h3>Others</h3>
        </div>
    </section>


    <!-- FOOTER -->

    <footer class="footer-distributed">
        <div class="footer-left">
            <img src="../image/logo.png" alt="">
            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                <a href="#">Cart</a>
                <a href="#">Profile</a>	
                <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">©2022 STI Education Services Group, Inc. All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>STI Academic Center, Ortigas Avenue <br>Extension, Cainta, Rizal</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+63 2 88121784</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/374eee3e25.js"></script>
    <script src="../javascript/script.js"></script>
</body>
</html>

