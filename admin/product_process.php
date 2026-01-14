<?php
require "../database.php";

    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $qty = $_POST['product_quantity'];

     
    $query = "insert into products(name,description,price,qty)values('$name','$description','$price','$qty')";
    $res = mysqli_query($db_connection, $query);
    if($res){
        echo "product added successful";

    }else {
        echo "error on adding product ";
    }