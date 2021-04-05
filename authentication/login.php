<?php
session_start();

include("../connection.php");

if (isset($_POST['signin'])) {
    $user_email = htmlspecialchars(strip_tags($_POST['email']));
    $password = htmlspecialchars(strip_tags($_POST['password']));

    if (!empty($user_email) and !empty($password)) {
        //read from database
        $query = "select * from users where email = '$user_email' limit 1";

        $result = mysqli_query($conn, $query);
        //print_r($result);

        if ($result and mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data["password"] === md5($password)) {


                if($user_data['verified'] == '0'){
                    $_SESSION['unverified_email'] = 'true';
                    header("Location:../public/verify.php");
                }else{
                    $_SESSION['user_name'] = $user_data["username"];
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: ../public/test-public.php");
                }
                //$_SESSION['verified'] = $user_data['verified'];
                //$_SESSION['email'] = $user_data['email'];

            } else {
                $_SESSION['password_error'] = 'Incorrect Password';
                header("Location: ../public/login.php");
            }
        } else {
            //pass;
            $_SESSION['email_error'] = "Email not of registered user";
            header("Location: ../public/login.php");
        }

    }else{
        $_SESSION['invalid'] = "Please put your Username and Password";
    }
}
