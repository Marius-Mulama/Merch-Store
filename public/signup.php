<?php
session_start();
$error='';
$username = $email = $email_taken = $user_taken =$taken = $phone = $phone_error = $pass='';


if(!isset($_SESSION['user_name'])){

    if (isset($_SESSION['email_error'])) {
        $email = $_SESSION['email'];
        $taken = $_SESSION['email_error'];
        $email_taken = "<span class='text-danger'> $taken </span>";
    }

    if (isset($_SESSION['phone_error'])) {
        $email = $_SESSION['email'];
        $taken = $_SESSION['phone_error'];
        $user_taken = "<span class='text-danger'> $taken </span>";

    }

    if (isset($_SESSION['password_error'])) {
        $taken = $_SESSION['password_error'];
        $pass = "<span class='text-danger' id='message'> $taken </span>";

    }

    //echo "Trial Run";
}else{
    header("Location: test-seller.php");
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
        <h3 class="card-title text-center">Register Account</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="../authentication/signup.php">
        <div class="card-body" style="padding: 10px;">
            <div class="form-group row">
                <label for="email" class="col-form-label col-12"> Enter Email</label><br>
                <div class="col-12">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required
                           value="<?php echo $email; ?>">
                    <?php echo $email_taken; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-form-label col-12"> Enter Phone Number</label><br>
                <div class="col-12">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="0712345678"
                           required value="<?php echo $phone; ?>" minlength="10" maxlength="10">
                    <? echo $phone_error;?>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-form-label col-12"> Enter UserName</label><br>
                <div class="col-12">
                    <input type="text" class="form-control" id="username" name="username" placeholder="UserName"
                           required value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-form-label col-12">Enter Password</label>
                <div class="col-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                           required onkeyup="check()">
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-form-label col-12">Repeat Password</label>
                <div class="col-12">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Password"
                           required onkeyup="check()">
                    <span id="message"></span>
                    <?php echo $pass; ?>
                </div>
            </div>

        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-lg btn-secondary col-12" id="customer-signup" style=" margin-bottom: 10px;"
                    name="customer-signup">
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