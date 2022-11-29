<?php

    if(isset($_POST['submit'])){
        $err = array();
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'] ;
        $cf_password = $_POST['cf_password'];
        $email  = $_POST['email'];
        if($name || $username || $password || $email || $cf_password){
            $err = "Không được để trống trường";
        }
        if($password !== $cf_password){
            $err = "Mật khẩu không trùng khớp";
        }
        if(!empty($err)){
            $sql = "INSERT INTO user (`user_id`, `user_name`, `user_password`, `user_email`) VALUES ('$username', '$name', '$password', '$email')";
            connect($sql);
        }
    }
?>

    <section class="max-w-6xl mx-auto mb-[40px] mt-4">
        <h1 class="font-bold text-[25px]">
            Đăng ký
        </h1>
        <form action="" method="post" class="mt-4">
            <p class="font-bold text-[18px]">tên người dùng </p>
            <input type="text" name="name" class="border-2 w-full h-[32px] mt-2">
            <p class="font-bold text-[18px] mt-5">tên tài khoản</p>
            <input type="text" name="username" class="border-2 w-full h-[32px] mt-2"><br />
            <p class="font-bold text-[18px]">Mật khẩu *</p>
            <input type="text" name="password" class="border-2 w-full h-[32px] mt-2">
            <p class="font-bold text-[18px] mt-5"> Xác nhận mật khẩu *</p>
            <input type="text" name="cf_password" class="border-2 w-full h-[32px] mt-2"><br />
            <p class="font-bold text-[18px]"> Địa chỉ email *</p>
            <input type="text" name="email" class="border-2 w-full h-[32px] mt-2">
            <!-- <button class="text-white bg-orange-600 text-[20px] border-2 mt-4" name="submit">Đăng ký</button> -->
            <input type="submit" name="submit" value="Đăng kí" class="text-white bg-orange-600 text-[20px] border-2 mt-4" >
            <?php 
                if(!empty($err)){
                    echo "<p class='text-red-600'>";
                    echo $err;
                    echo "</p>";
                }
            ?>
       
        </form>
    </section>
</html>