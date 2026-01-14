<form action="authentication.php">
    <?php include "header.php" ?>
<div class="content">
    <form action="admin_process.php" method="post" id="admin_process">
        <div class="input-field">
<label>Email</label>
            <input type="text" name="email">
        </div>
       
        <div class="input-field">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="login" id="login_btn">
        </div>
    </form>
</div>

<?php include "footer.php" ?>