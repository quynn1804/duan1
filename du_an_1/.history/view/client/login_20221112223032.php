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
            if (isset($_POST['checkbox'])) {
                setcookie("username", $username, time() + (86400 * 7));
                setcookie("password", $password, time() + (86400 * 7));
            }
            header("Location: index.php?act=home_user");
        } else if ($username || $password) {
            $err = "Không được để trống";
        } else {
            $err = "Thông tin mật khẩu không chính xác";
        }
    }
}
?>

<link rel="stylesheet" href="src/css/login.css">
<div class="login-page">
    <div class="form">
        <h2 class="title_login">Đăng nhập</h2>
        <form class="login-form" method="POST">
            <input type="text" placeholder="username" name="username" />
            <input type="password" placeholder="password" name="password" />
            <button name="submit">Login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>
