<?php
session_start();
$error='';
if(!isset($_SESSION['user_name'])){
        if(isset($_SESSION['email_error']) or isset($_SESSION['password_error']) or isset($_SESSION['invalid_error']) ){
            session_destroy();
            $error = "<span class='alert alert-danger alert-dismissible' data-dismiss='alert' id='error'> 
                        Invalid email or Password 
                       </span>";
        }


}else{
    if(isset($_SESSION['unverified_email'])){
        header("Location: verify.php");
    }else{
        header("Location: ../index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light bg-light" style="margin: 15px;">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <a class="navbar-brand" href="#">
        <!--suppress CheckImageSize -->
        <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Merch-Store
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../seller/login.php">Creator Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../seller/signup.php">Become a Creator</a>
            </li>
        </ul>
</nav>

<div class="card mx-auto card-info col-lg-6 col-md-8 col-sm-8 col-xl-4" style="padding: 1px; margin-top: 15px;">
    <div class="card-header">
        <h3 class="card-title text-center">Customer Login</h3>
    </div>

    <?php echo $error?>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="../authentication/login.php">
        <div class="card-body">
            <div class="form-group row">
                <label for="email" class="col-form-label col-12">Email</label><br>
                <div class="col-12">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>

            </div>
            <div class="form-group row">
                <label for="password" class="col-form-label col-12">Password</label>
                <div class="col-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
            </div>

        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-lg btn-secondary col-12" style=" margin-bottom: 10px;" name="signin"
                    id="signin">Log In
            </button>
        </div>
        <div class="form-group text-center">
            <p>Dont have an account? <a href="signup.php">Sign up</a></p>
            <a href="reset.php">Forgot Your Password?</a>
        </div>

    </form>
</div>




<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

<script>

</script>

</body>
</html>