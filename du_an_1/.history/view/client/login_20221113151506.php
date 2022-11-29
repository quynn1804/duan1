<?php
if (isset($_POST['submit'])) {
    $err = [];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user`";
    $query = getAll($sql);
    foreach ($query as $item) {
        if ($item['user_id'] == $username && $item['user_password'] == $password) {
            $_SESSION['username'] = $username;
            // if (isset($_POST['checkbox'])) {
            //     setcookie("username", $username, time() + (86400 * 7));
            //     setcookie("password", $password, time() + (86400 * 7));
            // }
                // header("location: index.php?act=home_user");
                echo "<script> window.location.href='index.php?act=home_user' </script>";
                // echo "<scrip>
                // window.location.href='index.php?act=home_user'";
                // echo "</scrip>";
        } else if ($username = "" || $password = "") {
            $err = "Không được để trống";
        } else {
            $err = "Thông tin mật khẩu không chính xác";
        }
    }
}
?>
<link rel="stylesheet" href="src/css/login.css">
<div class="return">
<a href="index.php?act=home_user">
    <li class="return-text">Quay lại <i class="fa-solid fa-rotate-left"></i></li>
</a>
</div>
<div class="login-page">
    <div class="form">
        <h2 class="title_login">Đăng nhập</h2>
        <form class="login-form" method="POST" action="">
            <input type="text" placeholder="username" name="username">
            <input type="text" placeholder="password" name="password">
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