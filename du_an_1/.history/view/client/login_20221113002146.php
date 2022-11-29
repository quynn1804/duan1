
<link rel="stylesheet" href="src/css/login.css">
<div class="login-page">
    <div class="form">
        <h2 class="title_login">Đăng nhập</h2>
        <form class="login-form" method="POST" action="">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="submit" name="submit" class="submit" value="Đăng nhập">
            <?php
            if(!empty($err)){
                echo '<p style="color: red;">';
                echo $err;
                echo '</p>';
            }
            ?>
            <p class="message">Not registered? <a href="index.php?act=register">Create an account</a></p>
        </form>
    </div>
</div>