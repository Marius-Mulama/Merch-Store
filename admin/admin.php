<?php
session_start();
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

    <title>Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">Admin Area <span class="sr-only">(current)</span></a>
            </li>

        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item navbar-toggler-right" style="cursor: pointer;">
                <a class="nav-link avatar dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown">
                    <img src="../images/avatar.webp" height="40" class="rounded-circle z-depth-0" alt="avatar">
                </a>
                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary">
                    <a class="dropdown-item" href="../public/logout.php">Logout</a>
<!--                    <a class="dropdown-item" href="reset.php">Reset</a>-->
                </div>
            </li>
        </ul>

    </div>
</nav>

<h1>Admin Area</h1>

<?php
require '../connection.php';
?>

<!-- table -->
<div class="container">
    <!-- php code for reading records -->
    <?php
    //setting connection
    $mysqli = new mysqli("localhost", "root", "", "merch_store") or die($mysqli->error);

    //variable to store search input
    $searchName = '';
    if (isset($_POST['search'])) {
        # code...
        $searchName = $_POST['searchValue'];
    }


    //sql for fetching of records
    $result = $mysqli->query("SELECT * FROM sellers") or die($mysqli->error);

    ?>
    <form action="admin.php" method="post">
        <label for="searchValue"></label>
        <input type="text" name="searchValue" id="searchValue" placeholder="Search Using First Name"
               class="form-control col-sm-4">
        <br>
        <input type="submit" name="search" id="search" class="btn btn-info" value="Search Seller">
    </form>
    <br>
    <caption>Sellers</caption>
    <table class="table table-dark">

        <tr>
            <th>ID</th>
            <th>Brand Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Popular Site</th>
            <th>Age</th>
            <th>Brand Image</th>
            <th colspan="2">Actions</th>

        </tr>
        <?php
        while ($row = $result->fetch_assoc()) :
            ?>
            <tr>
                <td><?php echo $row['id']; ?> </td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['popularsite']; ?></td>
                <td><?php echo $row['reg_date']; ?></td>
                <td><?php

                    ?></td>
                <td>
                    <a href="admin.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="admin.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>


</html>
