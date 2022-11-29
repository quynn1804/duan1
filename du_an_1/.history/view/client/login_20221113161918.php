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
        } else if ($username = "" && $password = "") {
            $err = "Không được để trống";
        } else {
            $err = "Thông tin mật khẩu không chính xác";
        }
    }
}
?>
<link rel="stylesheet" href="src/css/login.css">
<div class="body">
<div class="return">
<a href="index.php?act=home_user">
    <li class="return-text"><i class="fa-solid fa-rotate-left"></i> Quay lại trang chủ</li>
</a>
</div>
<div class="login-page">
    <?php
    if(empty($_GET['noti'])){
        $noti = $_GET['noti'];
        echo '<p style="color: pink"><?= $noti ?></p>';
    }
    ?>
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
            <p class="message">Không có tài khoản? <a href="index.php?act=register">Đăng kí ngay</a></p>
        </form>
    </div>
</div>
</div>