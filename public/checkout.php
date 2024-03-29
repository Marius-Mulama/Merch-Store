<?php
session_start();

if (empty($_SESSION["shopping_cart"])) {
    header("Location: cart.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
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
<div class="site-wrap">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Billing Details</h2>
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="c_county" class="text-black">County <span class="text-danger">*</span></label>
                            <select id="c_county" class="form-control">
                                <option value="1">Select a county</option>
                                <option value="2">Nairobi</option>
                                <option value="3">Mombasa</option>
                                <option value="4">Kisumu</option>
                                <option value="5">Nakuru</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Company Name </label>
                                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                            </div>
                            <div class="col-md-6">
                                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
                            <div class="collapse" id="create_an_account">
                                <div class="py-2">
                                    <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <div class="form-group">
                                        <label for="c_account_password" class="text-black">Account Password</label>
                                        <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                            <div class="collapse" id="ship_different_address">
                                <div class="py-2">

                                    <div class="form-group">
                                        <label for="c_diff_county" class="text-black">Country <span class="text-danger">*</span></label>
                                        <select id="c_diff_county" class="form-control">
                                            <option value="1">Select a county</option>
                                            <option value="2">Nairobi</option>
                                            <option value="3">Kisumu</option>
                                            <option value="4">Mombasa</option>
                                            <option value="5">Nakuru</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="c_diff_companyname" class="text-black">Company Name </label>
                                            <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <div class="col-md-6">
                                            <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Order Notes</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                            <div class="p-3 p-lg-5 border">

                                <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                                <div class="input-group w-75">
                                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Your Order</h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                    <th>Product</th>
                                    <th>Total</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($_SESSION["shopping_cart"]))
                                    {
                                    $total = 0;
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $values["item_name"]; ?> <strong class="mx-2">x</strong> <?php echo $values["item_quantity"]; ?></td>
                                        <td>Kshs. <?php echo $values["item_price"]; ?></td>
                                    </tr>
                                    <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                    } ?>
                                    <tr>
                                    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                    <td class="text-black font-weight-bold"><strong>Kshs. <?php echo number_format($total, 2); ?></strong></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>

                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                                    <div class="collapse" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                                    <div class="collapse" id="collapsecheque">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-5">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                                    <div class="collapse" id="collapsepaypal">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thank-you.php'">Place Order</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
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