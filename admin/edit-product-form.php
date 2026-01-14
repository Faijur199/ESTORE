<?php
include "header.php";
require "../database.php";

$id = $_GET['product_id'];
$query = "select * from products where id = $id limit 1";
$res = mysqli_query($db_connection, $query);
$row = mysqli_fetch_assoc($res);
?>

<div class="content">
    
    <form action="update_product.php" method="POST" id="add-product">
        <div class="input-field">
            <label>Product Name</label>
        <input type="text" name="product_name" id="product_name" value="<?php echo $row['name']; ?>">
        </div>
         <div class="input-field">
            <label>Product Description</label>
            <input type="text" name="product_description" id="product_description" value="<?php echo $row['description']; ?>">
        </div>
        <div class="input-field">
            <label>price</label>
            <input type="number" name="product_price" id="product_price" value="<?php echo $row['price']; ?>">
        </div>
        <div class="input-field">
            <label>Quantity</label>
            <input type="number" name="product_quantity" id="product_quantity" value="<?php echo $row['qty']; ?>">
        </div>
        <div>
            <input type="submit" value="Update Product" id="update_product_btn">
        </div>
    </form>
</div>