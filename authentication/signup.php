<?php
session_start();

$conn = null;
include("../connection.php");
include("functions.php");


$email = $username = $password = $passwordconfirm = $encrypted_pass = $phone= $site = '';
$errors = array('email' => '', 'username' => '', 'phone' => '', 'password' => '', 'site' => '');

if (isset($_POST['customer-signup'])) {

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
                print_r($ex);
            }
        }

    } else {
        $errors['email'] = 'Empty email address';
    }
    //username section
    if (!empty($_POST['username'])) {
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

    //Password section
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
        //echo "Invalid";
        $_SESSION['email_error'] = $errors['email'];
        $_SESSION['password_error'] = $errors['password'];
        $_SESSION['phone_error'] = $errors['phone'];

        $_SESSION['user'] = $username;
        $_SESSION['email'] = $email;

        //print_r($errors);
        header("Location: ../public/signup.php");
    } else {
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $username = strtolower(htmlspecialchars(strip_tags($_POST['username'])));
        $phone = $phone = "+254".strval(htmlspecialchars(strip_tags($_POST['phone'])));
        $password = htmlspecialchars(strip_tags($_POST['password']));
        $encrypted_pass = md5(strval($password));
        $verification_code = verify_code_generator(6);

        //Set values for verification


        $query = "insert into users(username, email,phone, password) values ('$username', '$email', '$phone','$encrypted_pass')";
        $query_verify = "insert into user_verification(email, verification_code) values ('$email', '$verification_code')";

        try {
            mysqli_query($conn, $query);
            mysqli_query($conn, $query_verify);
            echo "<script>alert('Registration Successful')</script>";
            header("Location: ../public/verify.php");
            die;
        } catch (Exception $ex) {
            echo "Connection Error";
        }
    }
}else{
    echo "Something went Wrong";
}
