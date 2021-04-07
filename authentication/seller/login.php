<?php
session_start();

include("../../connection.php");

if (isset($_POST['signin'])) {
    $user_email = htmlspecialchars(strip_tags($_POST['email']));
    $seller_id = htmlspecialchars(strip_tags($_POST['seller-id']));
    $password = htmlspecialchars(strip_tags($_POST['password']));

    if (!empty($user_email) and !empty($password) and !empty($seller_id)) {
        //read from database
        $query = "select * from sellers where email = '$user_email' limit 1";

        $result = mysqli_query($conn, $query);
        //print_r($result);

        if ($result and mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if(strval($user_data['id']) == $seller_id){
                if ($user_data["password"] === md5($password)) {

                    $_SESSION['user_name'] = $user_data["username"];
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: ../../seller/test-seller.php");

                } else {
                    $_SESSION['password_error'] = 'Incorrect Password';
                    header("Location: ../../seller/login.php");
                }

            }else{
                $_SESSION['id_error'] = "Wrong User ID";
                header("Location: ../../seller/login.php");
            }

        } else {
            //pass;
            $_SESSION['email_error'] = "Email not of registered user";
            header("Location: ../../seller/login.php");
        }

    }else{
        $_SESSION['invalid'] = "Please put your Username and Password";
    }
}
