<?php
include "header.php";
require "../database.php";
?>
<div class="content">
    <div>Products</div>
    <div class="product_container">
        <table border="1">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
            $query = "select * from products";
            $res = mysqli_query($db_connection, $query);
            while ($product = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $product['name']; ?> </td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><a href="edit-product-form.php?product_id=<?php echo $product['id'];?>">Edit</a></td>
            </tr>

            <?php
            }
            ?>

        </table>
     </div>
  </div>
  <?php
  include "footer.php";
  ?>