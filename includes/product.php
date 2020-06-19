<div class="col-md-4 my-lg-5">
    <form method="post" action="products.php?action=add&id=<?php echo $row['id']; ?>">
        <div class="card shadow" style="width: 18rem;">
            <img src="<?php echo $row['image'];?>" class="img-responsive" width="250" height="213" alt="Card image cap"/><br />
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>

                <p class="card-text">$ <?php echo $row['price']; ?></p>

                <input type="text" name="quantity" value="1" class="form-control" />

                <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>" />

                <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" />

                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />
            </div>
        </div>
    </form>
</div>
