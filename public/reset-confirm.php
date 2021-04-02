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

    <title>Reset</title>
</head>
<body>
    <span id=""></span>

<div class="card mx-auto card-info col-lg-6 col-md-8 col-sm-8 col-xl-4" style="padding: 1px; margin-top: 15px;">
    <div class="card-header" style="padding-top: 5px; padding-bottom: 5px;">
        <h3 class="card-title text-center">Reset Account</h3>
    </div>
    <!-- form start -->
    <form method="post" action="#">
        <div class="card-body" style="padding: 10px;">
            <div class="form-group row">
                <label for="email" class="col-form-label col-12"> User Email</label><br>
                <div class="col-12">
<!--                    Email is Autofilled and disabled for editing-->
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                           value="" required disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="reset-code" class="col-form-label col-12"> Enter Reset Code</label><br>
                <div class="col-12">
                    <input type="number" class="form-control" id="reset-code" name="reset-code" placeholder="Reset Code"
                           required>
                </div>
            </div>

            <div class="col text-center">
                <button type="submit" class="btn btn-lg btn-secondary col-12" id="reset" style=" margin-bottom: 10px;" name="reset">
                    Confirm Reset
                </button>
            </div>
    </form>
</div>


<script src="../js/script.js"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>

