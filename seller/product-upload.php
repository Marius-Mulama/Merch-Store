<?php
session_start();
$message="";
if(isset($_SESSION['seller-id']) and isset($_SESSION['user_name'])){
    $user = $_SESSION['user_name'];
    if(isset($_SESSION['error'])){
        $message ="<span class='alert alert-danger alert-dismissible' data-dismiss='alert' id='error'>
                        Something went wrong when uploading the Product. Please try Again.
                       </span>";
        unset($_SESSION['error']);
    }elseif (isset($_SESSION['message'])){
        $message ="<span class='alert alert-success alert-dismissible' data-dismiss='alert' id='error'>
                        Product Was Successfully uploaded.
                       </span>";
        unset($_SESSION['message']);
    }
}else{
    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--    External Css-->
    <link rel="stylesheet" type="text/css" href="../css/product-upload.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>Seller</title>
</head>
<body>
<?php
include ("navbar.php");
?>
<div class="container">
    <div class="card " style="padding: 1px;">
        <div class="card-header">
            <h3 class="card-title text-center">Product Upload</h3>
        </div>
        <?php echo $message; ?>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="../authentication/seller/product-upload.php" enctype="multipart/form-data">
            <div class="card-body">
                <!-- Product Name Section -->
                <div class="form-group row">
                    <label for="" class="col-form-label col-12">Product Name</label><br>
                    <div class="col-12">
                        <label for="product-name"></label>
                        <input type="text" class="form-control" id="product-name" name="product-name" placeholder="Product Name" required="">
                    </div>
                </div>
                <!-- End of Product Name Section -->

                <!-- Product Description Section -->
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" id="description" rows="5" name="description" style="resize: none;" required></textarea>
                </div>
                <!-- End of Product Description Section -->

                <!--  Product Price -->
                <div class="form-group row">
                    <label for="" class="col-form-label col-12">Product Price (Ksh.)</label><br>
                    <div class="col-12">
                        <label for="product-price"></label>
                        <input type="number" class="form-control" id="product-price" name="product-price" placeholder="Price" required>
                    </div>
                </div>
                <!-- End of Product Price -->

                <!-- Category Section (Unisex, Male or Female) -->
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="custom-select my-1 mr-sm-2" id="category" name="category">
                        <option value="Unisex" selected>Unisex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <!-- End of Category Section -->

                <!-- Add Product Image -->
                <div class="form-group">
                    <label for="" class="font-weight-bold">Product Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="product-image" name="product-image" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                    </div>
                </div>
                <!--  End of Adding Product Image -->

                <!-- Stock Available (The Sixes of merch and Quantities) -->
                <div class=" form-group col">
                    <h4 class="font-weight-bold text-center">Stock</h4><hr>
                    <div class="form-group col">
                        <div class="row">
                            <div class="col">
                                <label for="" class="col-form-label col-12 float-left font-weight-bold">
                                    <h5>Size</h5>
                                </label>
                            </div>

                            <div class="col">
                                <label for="" class="col-form-label col-12 float-left font-weight-bold">
                                    <h5>Quantity</h5>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <div class="row">
                            <div class="col">
                                <label for="" style="padding-right: 5px"><input type="checkbox" id="size" name="size" value="small"> S </label>
                            </div>
                            <div class="col">
                                <label for="large-quantity"></label>
                                <input type="number" id="small-quantity" name="small-quantity">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <div class="row">
                            <div class="col">
                                <label style="padding-right: 5px"><input type="checkbox" id="size" name="size" value="medium"> M </label>
                            </div>
                            <div class="col">
                                <input type="number" id="medium-quantity" name="medium-quantity">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <div class="row">
                            <div class="col">
                                <label style="padding-right: 5px"><input type="checkbox" id="size" name="size" value="large"> L </label>
                            </div>
                            <div class="col">
                                <input type="number" id="large-quantity" name="large-quantity">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End of Stocks Available -->

                <!-- Submit Form -->
                <div class="col text-center" style="padding-top: 10px">
                    <button type="submit" class="alert add-btn btn-outline-success" name="submit" id="submit">Add Product
                    </button>
                </div>

        </form>
    </div>
</div>


<script type="text/javascript" src="../js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
