
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estore</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div id="header">
    <div id="logo">
        <img src="logo.png" alt="estore">
    </div>
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="#">services</a>
        <a href="#">Contact US</a>
    </div>
    <?php if(!empty($_SESSION['user'])){ ?>
        <div id="login_panel">
            <a href="logout.php">Logout</a>
        </div>
        <?php }else{ ?>
    <div id="login_panel">
        <a href="login.php">Login Form</a>
        <a href="register.php">Register Form</a>
    </div>
    <?php } ?>
   </div> 
