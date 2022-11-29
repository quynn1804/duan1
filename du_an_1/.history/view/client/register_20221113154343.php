<?php

if (isset($_POST['submit'])) {
    $noti = $_GET['noti'];
    $err = array();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cf_password = $_POST['cf_password'];
    $email  = $_POST['email'];
    if ($name && $username && $password && $email && $cf_password) {
        $err = "Không được để trống trường";
    }
    if ($password !== $cf_password) {
        $err = "Mật khẩu không trùng khớp";
    }
    if (!empty($err)) {
        $sql = "INSERT INTO user (`user_id`, `user_name`, `user_password`, `user_email`) VALUES ('$username', '$name', '$password', '$email')";
        connect($sql);
        // header("location: index.php?act=account&noti=Đăng kí thành công");
    }
}
?>
<link rel="stylesheet" href="./src/css/bootstrap.min.css">
<link rel="stylesheet" href="./src/css/register.css">
<body>
<div class="return">
<a href="index.php?act=home_user">
    <li class="return-text"><i class="fa-solid fa-rotate-left"></i> Quay lại trang chủ</li>
</a>
</div>
<div class="login-page">
    <div class="form">
        <h2 class="title_login">Đăng Kí</h2>
        <form class="login-form" method="POST" action="">
            <input type="text" placeholder="Nhập name" name="name">
            <input type="text" placeholder="Nhập email" name="name">
            <input type="text" placeholder=" Nhập username" name="username">
            <input type="text" placeholder="Nhập password" name="username">
            <input type="text" placeholder="Xác nhận password" name="password">
            <input type="submit" name="submit" class="submit" value="Đăng Kí">
            <?php
            if(!empty($err)){
                echo '<p style="color: red;">';
                echo $err;
                echo '</p>';
            }
            ?>
            <p class="message">Đã có tài khoản? <a href="index.php?act=register">Đăng nhập</a></p>
        </form>
    </div>
</div>

<?php
if (!empty($err)) {
    echo '<p style="color: red;">';
    echo $err;
    echo '</p>';
}
?>

</body>
</html>