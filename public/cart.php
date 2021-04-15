<?php
session_start();
include ("../connection.php");
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
}else{
    header("Location: login.php");
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--    Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Cart</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light" style="margin: 15px;">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <a class="navbar-brand" href="../index.php">
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
                <a class="nav-link" href="creators.php">Discover Creators</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link avatar dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                    <!--suppress CheckImageSize -->
                    <?php
                    if(isset($_SESSION['username'])){ $user = $_SESSION['username']; ?>
                    <img src="../images/user-logo.png" height="30" class="rounded-circle z-depth-0" alt="avatar">Hi, <?php echo $user; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-secondary">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
                <?php
                }else{ ?>
                    <!--suppress CheckImageSize -->
                    <img src="../images/user-logo.png" height="30" class="rounded-circle z-depth-0" alt="avatar">Login
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-secondary">
                        <a class="dropdown-item" href="login.php">Log In</a>
                    </div>
                <?php }
                ?>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="cart.php">
                    <!--suppress CheckImageSize -->
                    <img src="../images/cart.png" alt="" height="30">Cart
                </a>
            </li>

        </ul>
    </div>
</nav>

<div class="container">
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><input type="number" value="<?php echo $values["item_quantity"]; ?>" disabled> </td>
                        <td>Kshs. <?php echo $values["item_price"]; ?></td>
                        <td>Kshs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Kshs. <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
    <div class="col text-center" style="padding-top: 10px">
        <a class="btn btn-lg btn-info" href="checkout.php">Proceed To CheckOut</a>
    </div>
</div>







<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>


</body>
</html>