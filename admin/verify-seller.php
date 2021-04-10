<?php
session_start();
include('../connection.php');

if (isset($_POST['verify'])) {
    $id = htmlspecialchars(strip_tags($_POST['id-verify']));

    if (!empty($id)){
        $query = "UPDATE sellers SET verified = true WHERE id=$id";
        try{
            $result = mysqli_query($conn, $query);
            header("Location: admin.php");
        }catch (Exception $ex){
            echo "Error Occurred While Verifying";
            sleep(10);
            header("Location: admin.php");
        }


    }else{
        echo "Error Occurred While Verifying";
        sleep(10);
        header("Location: admin.php");
    }
}else{
    echo "Error Occurred While Verifying";
    sleep(10);
    header("Location: admin.php");
}
