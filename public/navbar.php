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
                <a class="nav-link" href="../seller/signup.php">Become a Creator</a>
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
                <a class="nav-link" href="#">
                    <!--suppress CheckImageSize -->
                    <img src="../images/search.png" alt="" height="30">Search
                </a>
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