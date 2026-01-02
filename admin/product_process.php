<?php require "../datbase.php";
$name = $_POST['product_name'];
$description = $_POST['product_description'];
$price = ['product_price'];
$qty = $_POST['product_quantity'];

$query = "insert into products(name,description,price,qty)values('$name','$description','$price','$qty')";
$res = mysqli_query($db_connection, $query);
if($res){
    echo "product added successfuly";
}
else{
    echo "error occur on adding products";
}