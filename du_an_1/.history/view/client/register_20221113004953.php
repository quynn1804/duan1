<?php

    if(isset($_POST['submit'])){
        $err = array();
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'] ;
        $cf_password = $_POST['cf_password'];
        $email  = $_POST['email'];
        if($name && $username && $password && $email && $cf_password){
            $err = "Không được để trống trường";
        }
        if($password !== $cf_password){
            $err = "Mật khẩu không trùng khớp";
        }
        if(!empty($err)){
            $sql = "INSERT INTO user (`user_id`, `user_name`, `user_password`, `user_email`) VALUES ('$username', '$name', '$password', '$email')";
            connect($sql);
            header("location: index.php?act=account&noti=Đăng kí thành công");
        }
    }
?>
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    
</html>