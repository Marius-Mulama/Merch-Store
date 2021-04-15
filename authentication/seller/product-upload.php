<?php
session_start();

include ("../../connection.php");
$errors = array('product_name' => '', 'description' => '', 'price' => '', 'category' => '', 'Quantity' => '', 'image'=>'');
$seller_id = $_SESSION['seller-id'];

if (isset($_POST['submit'])){
    //Product Images Path
    $target_dir = "../../images/products/";
    $target = $target_dir .basename($_FILES['product-image']['name']);

    //product name
    if (!empty($_POST['product-name'])){
    $product_name = htmlspecialchars(strip_tags($_POST['product-name']));
    }else{
        $errors['product_name'] = "invalid";
    }
    //product description
    if(!empty($_POST['description'])){
        $product_description = htmlspecialchars(strip_tags($_POST['description']));
    }else{
        $errors['description'] = "invalid";
    }
    //Product Price
    if(!empty($_POST['product-price'])){
        $product_price = htmlspecialchars(strip_tags($_POST['product-price']));
    }else{
        $errors['price'] = "invalid";
    }
    //Sex of wearer
    if(!empty($_POST['category'])){
        $product_category = htmlspecialchars(strip_tags($_POST['category']));
    }else{
        $errors['category'] = "invalid";
    }

    //Quantity
    if(!empty($_POST['small-quantity'])){
        $small_quantity = htmlspecialchars(strip_tags($_POST['small-quantity']));
    }else{
        $small_quantity =0;
    }

    if(!empty($_POST['medium-quantity'])){
        $medium_quantity =htmlspecialchars(strip_tags($_POST['medium-quantity']));
    }else{
        $medium_quantity =0;
    }

    if(!empty($_POST['large-quantity'])){
        $large_quantity =htmlspecialchars(strip_tags($_POST['large-quantity']));
    }else{
        $large_quantity = 0;
    }
    //Images
    if($_FILES['product-image']['name'] == "" or $_FILES['product-image']['size'] == 0) {
        $errors['image'] = "invalid";
    }else{
        $product_image = $_FILES['product-image']['name'];
    }

    if(!array_filter($errors)){

        $product_image = $_FILES['product-image']['name'];
        if (empty($nameErr)) {
            $query = "insert into products(product_name, product_price, description, product_image, small, medium, large, seller_id) 
                    values ('$product_name', '$product_price', '$product_description', '$product_image', '$small_quantity', '$medium_quantity','$large_quantity', '$seller_id')";
        }
        try{
            if (mysqli_query($conn, $query)) {
                //here moving uploaded file to the folder
                move_uploaded_file($_FILES['product-image']['tmp_name'], $target);
                $_SESSION['message'] = 'Success';
                header("Location: ../../seller/product-upload.php");

            }else{
                $_SESSION['error'] ="invalid";
                header("Location: ../../seller/product-upload.php");
            }
        }catch (Exception $ex){
            $_SESSION['error'] ="invalid";
            header("Location: ../../seller/product-upload.php");
        }
}


}else{
    $_SESSION['error'] ="invalid";
    header("Location: ../../seller/product-upload.php");
}