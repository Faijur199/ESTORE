<?php
$username = $_POST["username"];
$password =$_POST["password"];

if($username == "admin" && $password="123"){
    header("Location:dashboard.php");
}
else{
    echo"Invalid username or password";
}
?>