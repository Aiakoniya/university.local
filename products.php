<?php include 'connection/link.php'; ?>
<?php include 'handler.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/search-form.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <?php
                $query = "SELECT * FROM table_product ORDER BY id ASC";
                $result = $link->query($query);
                if($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        include 'includes/product.php';
                    }
                }
            ?>
        </div>
        <?php include 'includes/order-details.php'; ?>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
