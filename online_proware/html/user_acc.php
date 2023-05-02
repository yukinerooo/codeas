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
                <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                <div class="dot"></div>
            </ul>
        </div>
    </section>
  
    <!-- TEXT DIVIDER -->.
    <?php 
        if(isset($_SESSION['auth'])){
            ?>
            <div class="M-title">
                <i class="fa-solid fa-user"></i>
                <h3>Hello! <?= $_SESSION['auth_user']['name']; ?>. </h3>
            </div>

        <?php 
        }
    ?>

    <section id="lg-btn">
        <a href="../logout.php">
            <button class="logout-btn">
                <span>Log Out</span>
                <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                </svg>
            </button>
        </a>
    </section>



    <section class="profiling">
        <div class="prof-container">
            <div class="edit-prof">
                <h3>PROFILE</h3>
                    <div class="group-prof">
                        <input type="text" name="updt-name" class="updt-input" placeholder="asdf" value="<?= $row['name']; ?>">
                    </div>
                    <div class="group-prof">
                        <input type="text" name="updt-phone" class="updt-input" placeholder="asdf" value="<?= $row['phone']; ?>">
                    </div>
                    <div class="group-prof">
                        <input type="text" name="updt-password" class="updt-input" placeholder="asdf" value="<?= $row['pwd']; ?>">
                    </div>
                    <button class="edt-btn">Edit</button>
            </div>
        </div>
        <div class="prof-container">
            <div class="transaction">
                <h3>TRANSACTION</h3>
            </div>
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
    <script src="../assets/javascript/script.js"></script>
</body>
</html>

