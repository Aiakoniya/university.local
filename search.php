<?php

require 'connection/link.php';

$page_title = 'Search';

if(!empty($_GET['search'])){
    $query = "SELECT * FROM table_product WHERE name LIKE '%{$_GET['search']}%'";
    $products = $link->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/search-form.php'; ?>

    <div class="container my-lg-5">
        <div class="row justify-content-center">
            <?php if ($products->num_rows > 0): ?>
                <?php while($row = mysqli_fetch_array($products)): ?>
                    <?php include 'includes/product.php'; ?>
                <?php endwhile; ?>
            <?php endif ?>
        </div>

        <?php include 'includes/order-details.php'; ?>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>

