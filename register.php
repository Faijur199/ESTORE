<?php include "header.php"; ?>
<div class="content">
    <form action="register_process.php" method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="full_name" id="full_name">
            <?php 
                if(isset($_GET['name_empty']) & !empty($_GET['name_empty'])){
            ?>
            <span id="error">Please enter your full name</span>
            <?php } ?>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label>Phone</label>
            <input type="number" name="phone" id="phone">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="Register me" id="register_btn">
        </div>
    </form>

</div>

<?php include "footer.php"; ?>
