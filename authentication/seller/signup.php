<?php
session_start();

$conn = null;
include("../../connection.php");
include("../functions.php");

$email = $username = $password = $passwordconfirm = $encrypted_pass = $phone= $site = '';
$errors = array('email' => '', 'username' => '', 'phone' => '', 'password' => '', 'site' => '');


if(isset($_POST['seller-signup'])){
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars(strip_tags($_POST['email']));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        } else {

            try {
                $query = "select id from users where email = '$email' ";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    $errors['email'] = "Email Already in use";
                } else {
                    $email = htmlspecialchars(strip_tags($_POST['email']));
                }
            } catch (Exception $ex) {
                $_SESSION['server_error'] = "Something Went Wrong on our Side, Please Try Again";
                header("Location: ../../seller/signup.php");
            }
        }

    } else {
        $errors['email'] = 'Empty email address';
    }

    if (!empty($_POST['username'])) {
        $username = strtolower(htmlspecialchars(strip_tags($_POST['username'])));

        try {
            $query = "select id from users where username = '$username' ";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $errors['username'] = 'Username Taken';
            } else {
                $username = strtolower(htmlspecialchars(strip_tags($_POST['username'])));

            }
        } catch (Exception $ex) {
            $_SESSION['server_error'] = "Something Went Wrong on our Side, Please Try Again";
            header("Location: ../../seller/signup.php");
        }
        $username = strtolower(htmlspecialchars(strip_tags($_POST['username'])));
    } else {
        $errors['username'] = 'Empty User Name';

    }

    //Phone number Section
    if(!empty($_POST['phone'])){
        $phone = "+254".strval(htmlspecialchars(strip_tags($_POST['phone'])));
    }else{
        $errors['phone'] = 'Empty Phone Number';
    }
    //Popular Site Section
    if(!empty($_POST['site-url'])){
        $site =htmlspecialchars(strip_tags($_POST['site-url']));
    }else{
        $errors['site'] = "Empty url";
    }

    if (!empty($_POST['password'])) {
        $password = htmlspecialchars(strip_tags($_POST['password']));
        if (!empty($_POST['password2'])) {
            $passwordconfirm = htmlspecialchars(strip_tags($_POST['password2']));

            if (passwordMatch($password, $passwordconfirm)) {
                $encrypted_pass = md5(strval($password));
            } else {
                $errors['password'] = "Passwords Did Not Match";
            }
        } else {
            $errors['password'] = "Please confirm Password";
        }
    } else {
        $errors['email'] = 'Empty Password';
    }


    if (array_filter($errors)) {
        echo "Invalid";
        $_SESSION['user_error'] = $errors['username'];
        $_SESSION['email_error'] = $errors['email'];
        $_SESSION['phone_error'] = $errors['phone'];
        $_SESSION['password_error'] = $errors['password'];
        $_SESSION['url_error'] = $errors['site'];

        $_SESSION['user-auth'] = $username;
        $_SESSION['email-auth'] = $email;
        $_SESSION['url-auth'] = $site;
        $_SESSION['phone-auth'] = $phone;

        print_r($errors);
        header("Location: ../../seller/signup.php");
    } else {
        $username = strtolower(htmlspecialchars(strip_tags($_POST['username'])));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $phone = "+254" . strval(htmlspecialchars(strip_tags($_POST['phone'])));
        $site = htmlspecialchars(strip_tags($_POST['site-url']));
        $password = htmlspecialchars(strip_tags($_POST['password']));
        $encrypted_pass = md5(strval($password));

        $query = "insert into sellers(username, email, phone, popularsite, password) values ('$username', '$email', '$phone','$site','$encrypted_pass')";

        try {
            if(mysqli_query($conn, $query)){
                header("Location: ../../public/login.php");
                die;
            }else{
                $_SESSION['server_error'] = "Something Went Wrong on our Side, Please Try Again";
                header("Location: ../../seller/signup.php");
            }

        } catch (Exception $ex) {
            //echo "Connection Error";
            $_SESSION['server_error'] = "Something Went Wrong on our Side, Please Try Again";
            header("Location: ../../seller/signup.php");
        }
    }

}else{
    $_SESSION['server_error'] = "Something Went Wrong on our Side, Please Try Again";
    header("Location: ../../seller/signup.php");
}

