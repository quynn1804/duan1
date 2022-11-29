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
        <h2>Đăng kí</h2>
        <form class="register-form">
            <input type="text" placeholder="name" />
            <input type="password" placeholder="password" />
            <input type="text" placeholder="email address" />
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="username" />
            <input type="password" placeholder="password" />
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>
