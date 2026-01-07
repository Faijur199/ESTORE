<?php
include "header.php";
include "../database.php";


$id = $_GET['prouct_id'];
$query = "select * from products where id = $id limit 1";
$res = mysqli_query($db_connection, $query);
$row = mysqli_fetch_assoc($res)
?>

<div class="content">
    <form action="product_process.php" method="POST" id="add-product">
        <div class="input-field">
            <label>Product Name</label>
            <input type="text" name="product_name" id="product_name" va>

        </div>
        <div class="input-field">
            <label>Product Description</label>
            <input type="text" name="product_description" id="product_description" value="">
        </div>
        <div class="input-field">
            <label>Price</label>
            <input type="number" name="product_price" id="product_price">
        </div>
        <div class="input-field">
            <label>Quantity</label>
            <input type="number" name="product_quantity" id="product_quantity">
        </div>
        <div class="input-field">
            <label>Image</label>
            <input type="file" value="product_image" id="product_image">
        </div>
        <div>
            <input type="submit" value="Add Product" id="add_product_btn">
        </div>
    </form>

</div>

<?php include "footer.php"; ?>