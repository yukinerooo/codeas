<?php session_start();
if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in.";
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css"> 
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['message'])){ 
        ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <strong>Oh no!</strong> <?= $_SESSION['message']; ?>.
        </div>
    <?php
        unset($_SESSION['message']);
         } ?>
    <!-- register form -->
    <div class="form-box">
        <h1>Register</h1>
        <form id="register" action="functions/authcode.php" method="post" class="input-grp">
            <input type="text" name="name" class="input-field" placeholder="Name" required>
            <input type="email" name="email" class="input-field" placeholder="Email Address" required>
            <input type="number" name="phone" class="input-field" placeholder="Phone Number" required>
            <input type="text" name="pwd" class="input-field" placeholder="Password" required>
            <input type="text" name="pwdRepeat" class="input-field" placeholder="Repeat Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
            <button type="submit" name="regis-btn" class="submit-btn">Register</button>
        </form>
    </div>
</body>
</html> 