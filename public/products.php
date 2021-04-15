<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "merch_store");
$creator_name ='';

if(isset($_POST["add_to_cart"])) {
    if(isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else {
        $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/creators.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--    Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <Title>Products</Title>
</head>
<body>
<?php
include ("navbar.php");

//php code for reading records
$mysqli = new mysqli("localhost", "root", "", "merch_store") or die($mysqli->error);
//sql for fetching of records
$result = $mysqli->query("SELECT * FROM products") or die($mysqli->error);
?>
<div class="container-fluid">
    <div class="jumbotron-fluid">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2" id="creator-card">
            <?php
            $id='';
            while ($row = $result->fetch_assoc()) :
                $id = $row['id'];
                $creator = $row['seller_id'];
                $result2= $mysqli->query("SELECT username FROM sellers WHERE id=$creator") or die($mysqli->error);
                $name = $result2->fetch_assoc();
                $creator_name = $name['username'];
                ?>
                <div class="col">
                    <form method="post" action="products.php?action=add&id=<?php echo $id ?>">
                        <div class="card h-100" id="<?php echo $row['id'] ?>">
                            <?php echo "<img src='../images/products/" . $row['product_image'] . "' class='card-img-top'>"; ?>
                            <div class="card-body">
                                <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>
                                <h5> <?php echo $row["description"]; ?> </h5>
                                <h6 >Creator: <i class="text-info"><?php echo $creator_name; ?></i></h6>

                                <h4 class="text-danger">Kshs. <?php echo $row["product_price"]; ?></h4>

                                <input type="number" name="quantity" value="1" class="form-control" hidden/>

                                <input name="hidden_name" value="<?php echo $row["product_name"]; ?>" hidden/>

                                <input name="hidden_price" value="<?php echo $row["product_price"]; ?>" hidden/>

                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            endwhile;
            ?>
        </div>

    </div>
</div>
</body>
</html>
