<?php
session_start();
include("../connection.php");


if (isset($_POST['verify'])) {
    $user_email = htmlspecialchars(strip_tags($_POST['email']));
    $verification_code = htmlspecialchars(strip_tags(strval($_POST['verification-code'])));

    if (!empty($user_email) and !empty($verification_code)){

        $query = "select * from user_verification where email = '$user_email' limit 1";
        $query1 = "select * from users where email = '$user_email' limit 1";
        $result = mysqli_query($conn, $query);
        $result1=mysqli_query($conn, $query1);

        if ($result and mysqli_num_rows($result) > 0 and $result1 and mysqli_num_rows($result1)>0) {
            $user_data = mysqli_fetch_assoc($result);
            $user_data1 = mysqli_fetch_assoc($result1);
            $id=$user_data['id'];
            $id1= $user_data1['id'];


            if($verification_code == $user_data['verification_code']){
                $query = "DELETE FROM user_verification WHERE id=$id";
                $query1 = "UPDATE users SET verified = true WHERE id=$id1";
                try{
                    mysqli_query($conn, $query);
                    mysqli_query($conn, $query1);
                    mysqli_close($conn);
                    header("Location: ../public/test-public.php");
                }catch (Exception $ex){
                    $_SESSION['verification_error'] = "Something Went wrong Please try Again";
                    header("Location: ../public/verify.php");
                }


            }else{
                $_SESSION['verification_error'] = "Please Check email for Correct Verification code";
                header("Location: ../public/verify.php");
            }
        } else{
            $_SESSION['verification_error'] = "Thee Email is not of a registered Account";
            header("Location: ../public/verify.php");
        }


    } else {
        $_SESSION['verification_error'] = "Empty Email and Verification Code";
        header("Location: ../public/verify.php");
    }
}
