<?php 
session_start();
include "header.php";


$user =  $_SESSION['user'];
echo "Welcome" . $user;



include "footer.php";
?>  