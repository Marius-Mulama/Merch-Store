<?php
session_start();
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
}else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="../css/landing/bootstrap.min.css">
    <link rel="stylesheet" href="../css/landing/magnific-popup.css">
    <link rel="stylesheet" href="../css/landing/jquery-ui.css">
    <link rel="stylesheet" href="../css/landing/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/landing/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/landing/aos.css">

    <link rel="stylesheet" href="../css/landing/style.css">

</head>
<body>
<?php
include ("navbar.php")
?>

<div class="site-wrap">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Thank you!</h2>
                    <p class="lead mb-5">You order was successfuly completed.</p>
                    <p><a href="../index.php" class="btn btn-sm btn-primary">Back </a></p>
                </div>
            </div>
        </div>
    </div>



<script src="../js/landing/jquery-3.3.1.min.js"></script>
<script src="../js/landing/jquery-ui.js"></script>
<script src="../js/landing/popper.min.js"></script>
<script src="../js/landing/bootstrap.min.js"></script>
<script src="../js/landing/owl.carousel.min.js"></script>
<script src="../js/landing/jquery.magnific-popup.min.js"></script>
<script src="../js/landing/aos.js"></script>

<script src="../js/script.js"></script>

</body>
</html>