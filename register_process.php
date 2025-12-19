<?php 
if(isset($_POST)){
    //validation
    $name = $phone = $email = $password = "";
    if(isset($_POST["full_name"]) & !empty($_POST["full_name"])){
        $name = $_POST["full_name"];
    }
    else{
        header("Location:register.php?name_empty=1");
    }
}else{
    header("Location: register.php");
}
?>