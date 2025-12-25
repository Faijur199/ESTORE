<?php
require_once "database.php";
session_start();//must be started at the top of the file
$email = $_POST["email"];
$password =$_POST["password"];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where email ='$email'";
$res = mysqli_query($db_connection, $query);
$count = mysqli_num_rows($res);

//if email matches with db record
if($count == 1){
    $row = mysqli_fetch_assoc($res);//gets the form db
    if(password_verify($password, $row['password'])){
        $_SESSION['user'] = $row['name'];//storing value to the session
        header("Location: dashboard.php");
    }
}
else{
    echo"Invalid username or password";
}
?>