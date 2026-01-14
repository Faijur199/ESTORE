<?php
session_start(); 
require_once "../database.php";


$username = $_POST["username"];
$password =$_POST["password"];



$query ="select * from admin where username='$username'";
$res = mysqli_query($db_connection, $query);
$count =mysqli_num_rows($res);
// if username matches  with db record
if($count== 1){
 $row = mysqli_fetch_assoc($res); 
 if(password_verify($password, $row['password'])){
    $_SESSION['admin']=$row['name']; //storing value to the session
    header("Location:dashboard.php");
 }
}else{
    echo"Invalid username / password";
}