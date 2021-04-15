<!DOCTYPE html>
<?php
session_start();
?>
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

    <title>Discover</title>
</head>
<body>
<?php
include ("navbar.php");

//php code for reading records
$mysqli = new mysqli("localhost", "root", "", "merch_store") or die($mysqli->error);
//sql for fetching of records
$result = $mysqli->query("SELECT id, username, sellerimage FROM sellers where verified=1") or die($mysqli->error);
?>

<div class="container-fluid">
    <h2 class="modal-header justify-content-center">CREATORS</h2>
    <div class="jumbotron-fluid">
        <div class="row row-cols-1 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2" id="creator-card">
        <?php
        $id='';
        while ($row = $result->fetch_assoc()) :
            $id = $row['id']
        ?>
            <div class="col">
                <div class="card h-100" id="<?php echo $row['id'] ?>" onclick="release(<?php echo $row['id'] ?>)">
                    <?php echo "<img src='../images/sellers/" . $row['sellerimage'] . "' class='card-img-top'>"; ?>
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $row['username']; ?></h5>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
        </div>

    </div>
</div>

<footer class="justify-content-left" style="height: 5%;">
    Merch Store
</footer>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

<script type="javascript">
    function release(id) {
        console.log(id)
    }
</script>


</body>
</html>