<?php
include "header.php";
require "database.php";
?>
<div class="content">
    <div>Products</div>
    <div class="product_container">
        <?php
            $query = "select * from products";
            $res = mysqli_query($db_connection, $query);
            while ($product = mysqli_fetch_assoc($res)) { ?>
                <div class="product">
                    <p><?php echo $product['name']; ?> </p>
                    <p><?php echo $product['description']; ?></p>
                    <p><?php echo $product['price']; ?></p>
                    <p><img src="images\<?php echo $product["image"]; ?>"></p>
                    <p><a href="add-to-cart.php?product_id=<?php echo $product['id'];?>">Buy Now </a></p>
                </div>

            <?php
            }
            ?>
     </div>
  </div>
  <?php
  include "footer.php";
  ?>