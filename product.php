<?php 
    include "header.php";
    require "database.php";
?>
<div class="content">
    products
    <div class="product-container">
    <?php 
        $query = "select * from products";
        $res = mysqli_query($db_connection, $query);
        while($product = mysqli_fetch_assoc($res)){ ?>
        <div class="product">
            <p><?php echo $product['name']; ?></p>
            <p><?php echo $product['description']; ?></p>
            <p><?php echo $product['price']; ?></p>
            <p><img src="images/samsung-galaxy-s25-ultra-titanium-silver-official-image_1.webp <?php echo $product["image"]; ?>" alt=""></p>
            <p><input type="button" value="Buy Now"></p>
        </div>
        <?php
        }
    ?>
    </div>
</div>
<?php include "footer.php"; ?>