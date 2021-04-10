<?php
session_start();
include('../connection.php');

if (isset($_POST['verify'])) {
    $user_email = htmlspecialchars(strip_tags($_POST['id-verify']));

    if (!empty($user_email)){
        $query = "UPDATE sellers SET verified = true WHERE id=$user_email";

        $result = mysqli_query($conn, $query);

    }else{
        echo "error 1";
    }
}else{
    echo "Error 2";
}

//if (isset($_POST['verify']) ) {
//    $verify_id = strip_tags($_POST['id-verify']);
//    if (!empty($verify_id)){
//        $query = "UPDATE sellers SET verified = true WHERE id=$verify_id";
//
//        try {
//            echo gettype($verify_id);
//            echo $verify_id;
//            mysqli_query($conn, $query);
//            echo "done 1";
//            mysqli_close($conn);
//            echo "Done 2";
//            //header("Location: admin.php");
//
//        } catch (Exception $ex) {
//            echo "Error Occurred";
//        }
//    }else{
//        echo "not good 1";
//    }
//}else{echo "Not Good";}
