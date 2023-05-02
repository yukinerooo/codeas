<?php

session_start();

include('../config/dbcon.php');

if(isset($_POST['regis-btn'])){ 

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
    $pwdRepeat = mysqli_real_escape_string($con, $_POST['pwdRepeat']);
   
    // invalid password 
    $check_email_query = "SELECT email FROM users WHERE email='$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['message'] = "Email already registered";
        header('Location: ../register.php');
    } 
    else{
    
        if($pwd == $pwdRepeat){
            $insert_query = "INSERT INTO users (name,email,phone,pwd) VALUES ('$name', '$email', '$phone    ', '$pwd')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run){
                $_SESSION['message'] = "Register Successfully";
                header('Location: ../index.php');
            }
            else{
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
            }
        }
        else{
            $_SESSION['message'] = "Password do not match";
            header('Location: ../register.php');
        }
    }
}

else if(isset($_POST['login-btn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND pwd='$pwd' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['message'] = "Logged In Successfully";
        header("location: ../html/index.php");
    }
    else{
        $_SESSION['message'] = "Invalid Account";
        header("location: ../index.php");
    }
}

else if(isset($_POST['edt-btn'])){
    $currentUser = $_SESSION['name'];

    $edit_query = "SELECT * FROM users WHERE name = '$currentUser' ";
    $edit_query_run = mysqli_query($con, $edit_query);

    if($edit_query_run){
        if(mysqli_num_rows($edit_query_run) > 0){
            while($row = mysqli_fetch_array($edit_query_run)){
            }
        }
    }
}

?>