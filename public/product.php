<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/product.css" rel="stylesheet">

</head>

<body>
<span id="added-span" style="margin: 0px; padding: 0px; border: 0px;"></span>
<main class="container">


    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <!-- <img data-image="black" src="images/clothes2.jpg" alt="">
        <img data-image="blue" src="images/clothes2.jpg" alt=""> -->
        <img data-image="red" class="active" src="../images/img1.jpg" alt="Product">
    </div>


    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <h1>Product Name</h1>
            <hr>
        </div>

        <!-- Product Configuration -->
        <div class="#">

            <!-- Product Color -->
            <div class="product-color">
                <span>Color</span>

                <div class="color-choose">
                    <div>
                        <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                        <label for="red"><span>Grey</span></label>
                    </div>
                    <div>
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                        <label for="blue"><span>Black</span></label>
                    </div>
                    <div>
                        <input data-image="black" type="radio" id="black" name="color" value="black">
                        <label for="black"><span>Red</span></label>
                    </div>
                </div>

            </div>
            <hr>

            <!-- Cable Configuration -->
            <div class="size">
                <span style="font-weight: bold;">Size</span>

                <div class="size-choose">
                    <button id="size-button"> S</button>
                    <button id="size-button"> M</button>
                    <button id="size-button"> L</button>
<!--                    <button id="size-button"> XL</button>-->
<!--                    <button id="size-button"> XXL</button>-->
<!--                    <button id="size-button">XXXL</button>-->
                </div>
            </div>
        </div>
        <hr>

        <!-- Product Pricing -->
        <div class="product-price">
            <p style="text-align: center; font-weight: bold;">Ksh. 2000 </p>
        </div>
        <div>
            <button class="alert cart-btn" id="add-to-cart" style="width:100%; text-align: center;">
                Add to cart
            </button>
        </div>
    </div>
</main>

<!-- Scripts -->
<script src="../js/script.js" charset="utf-8"></script>
<!-- Third party scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>
