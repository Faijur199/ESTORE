<?php
session_start();//must be started at the top of the file
$username = $_POST["username"];
$password =$_POST["password"];

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