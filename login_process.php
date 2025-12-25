<?php
require_once "database.php";
session_start();//must be started at the top of the file
$email = $_POST["email"];
$password =$_POST["password"];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where email ='$email'";
$res = mysqli_query($db_connection, $query);
$count = mysqli_num_rows($res);
echo $count;
die;

if($username == "admin" & $password=="123"){
    
        $_SESSION['user'] ='admin';//storing value to the session
    
    header("Location:dashboard.php");
}

else if($username =="customer" & $password=="123"){
    $_SESSION['user'] = 'customer';//storing value to the session
    header("Location:dashboard.php");
}
else{
    echo"Invalid username or password";
}
?>