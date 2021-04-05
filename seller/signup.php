<?php
session_start();
$error='';
$username = $email = $url= $phone= $email_error= $user_error = $phone_error= $password_error= $url_error= $general_error ='';

if(!isset($_SESSION['user_name'])){

    //email error
    if (isset($_SESSION['email_error'])) {
        $email = $_SESSION['email-auth'];
        $error = $_SESSION['email_error'];
        $email_error = "<span class='text-danger'> $error </span>";
    }
    //UserName Error
    if(isset($_SESSION['user_error'])){
        $username = $_SESSION['user-auth'];
        $error = $_SESSION['user_error'];
        $user_error = "<span class='text-danger'> $error </span>";
    }

    //Phone error
    if (isset($_SESSION['phone_error'])) {
        $phone = $_SESSION['phone-auth'];
        $error = $_SESSION['phone_error'];
        $phone_error = "<span class='text-danger'> $error </span>";

    }
    //Password Error
    if (isset($_SESSION['password_error'])) {
        $error = $_SESSION['password_error'];
        $password_error = "<span class='text-danger' id='message'> $error </span>";

    }

    if(isset($_SESSION['url_error'])){
        $url = $_SESSION['url-auth'];
        $error =$_SESSION['url_error'];
        $url_error = "<span class='text-danger'> $error </span>";
    }

    if(isset($_SESSION['server_error'])){
        //session_destroy();
        $general_error = "<span class='alert alert-danger alert-dismissible' data-dismiss='alert' id='error'> 
                        OOp's Something went wrong, Try Again. 
                       </span>";
    }
    session_destroy();

}else{
    header("Location: test-public.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Sign Up</title>
</head>
<body>
<div class="card mx-auto card-info col-lg-6 col-md-8 col-sm-8 col-xl-4" style="padding: 1px;">
    <div class="card-header" style="padding-top: 5px; padding-bottom: 5px;">
        <h3 class="card-title text-center">Register Seller Account</h3>
    </div>
    <!-- /.card-header -->
    <?php echo $general_error?>
    <!-- form start -->
    <form method="post" action="../authentication/seller/signup.php">
        <div class="card-body" style="padding: 10px;">
            <div class="form-group row">
                <label for="username" class="col-form-label col-12"> Enter Brand Name/ User Name</label><br>
                <div class="col-12">
                    <input type="text" class="form-control" id="username" name="username"  required
                           value="<?php echo $username; ?>">
                    <?php echo $user_error; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-form-label col-12"> Enter Email</label><br>
                <div class="col-12">
                    <input type="email" class="form-control" id="email" name="email"  required
                           value="<?php echo $email; ?>">
                    <?php echo $email_error; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-form-label col-12"> Enter Phone Number (07 ***)</label><br>
                <div class="col-12">
                    <input type="number" class="form-control" id="phone" name="phone"
                           required minlength="10" maxlength="10">
                    <?php echo $phone_error;?>
                </div>
            </div>
            <div class="form-group row">
                <label for="site-url" class="col-form-label col-12"> Enter URL of your Page</label><br>
                <div class="col-12">
                    <input type="url" class="form-control" id="site-url" name="site-url"
                           required value="<?php echo $url; ?>">
                    <?php echo $url_error ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-form-label col-12">Enter Password</label>
                <div class="col-12">
                    <input type="password" class="form-control" id="password" name="password"
                           required onkeyup="check()">
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-form-label col-12">Repeat Password</label>
                <div class="col-12">
                    <input type="password" class="form-control" id="password2" name="password2"
                           required onkeyup="check()">
                    <span id="message"></span>
                    <?php echo $password_error; ?>
                </div>
            </div>

        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-lg btn-secondary col-12" id="seller-signup" style=" margin-bottom: 10px;"
                    name="seller-signup">
                Sign Up
            </button>
        </div>
        <div class="form-group text-center">
            <p class="alert-dismissible">Already Have An Account? <a href="login.php">Login</a></p>
        </div>

    </form>
</div>


<script src="../js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>