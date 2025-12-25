<?php include "header.php" ?>
<div class="content">
    <form action="login_process.php" method="post">
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Passowrd</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="login">
        </div>
    </form>
</div>

<?php include "footer.php" ?>