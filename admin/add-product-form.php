<div class="content">
    <form action="product_process.php" method="POST" id="add-product">
        <div class="input-field">
            <label>Product Name</label>
            <input type="text" name="product_name" id="product_name">
            <?php 
                if(isset($_GET['name_empty']) & !empty($_GET['name_empty'])){
            ?>
            <span id="error">Please enter your full name</span>
            <?php } ?>  
        </div>
        <div class="input-field">
            <label>Product Description</label>
            <input type="text" name="product_description" id="product_description">
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
