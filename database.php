<?php
$db_host = "localhost";
$db_user = "root";
$db_password= "";
$db_name = "store_db";

$db_connection = mysqli_connect($db_host, $db_user,$db_password,$db_name);
if(!$db_connection){
    die();
}
else{
    echo "Databse Connection Successful";
}
?>