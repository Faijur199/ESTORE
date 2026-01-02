<?php
include "header.php";
require "../database.php";
?>
<div class="content">
    <div>products</div>
    <div class="product-container">
        <table border="1">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </table>
        <?php
        $query = "select * from products";
        $res = mysqli_query($db_connection, $query);
        while ($product = mysqli_fetch_assoc($res)) { ?>z
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><a href="edit-product-form.php">Edit</a></td>
            </tr>
        <?php
        }
        ?>
    </div>
</div>
<?php include "footer.php"; ?>