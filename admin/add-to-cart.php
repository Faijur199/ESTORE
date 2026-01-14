<?php 
session_start();
$id=$_GET['product_id'];
$_SESSION['product_count'][]=$id;
header("Location:product.php");