<?php
    if(isset($_POST['submit'])){
        $err = [];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user`";
        $query = getAll($sql);
        foreach($query as $item){
        if($item['user_id'] == $username && $item['user_password'] == $password){
            $_SESSION['username'] = $username;
            if(isset($_POST['checkbox'])){
                setcookie("username", $username, time()+(86400*7));
                setcookie("password", $password, time()+(86400*7));
            }
            header("Location: index.php?act=home_user");
        }
        else if($username || $password){
            $err = "Không được để trống";
        }
        else {
            $err = "Thông tin mật khẩu không chính xác";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <section class="max-w-6xl mx-auto mb-[40px] mt-4">
        <h1 class="font-bold text-[25px]">
            Đăng nhập
        </h1>
        <?php
        if(isset($_GET['noti'])){
        $id = $_GET['noti'];
        echo '<p style="color: red;">';
        echo $id;
        echo '</p>';
    }
        ?>
        <form action="" method="post" class="mt-4">
            <p class="font-bold text-[18px]">tên tài khoản hoặc địa chỉ email *</p>
            <input type="text" name="username" class="border-2 w-full h-[32px] mt-2"
            <?php
            if(isset($_COOKIE['username'])){
                ?>
                value="<?php echo $_COOKIE['username'] ?>";
                <?php
            }
            ?>
            >
            <p class="font-bold text-[18px] mt-5">Mật khẩu *</p>
            <input type="text" name="password" class="border-2 w-full h-[32px] mt-2"
            <?php
            if(isset($_COOKIE['password'])){
                ?>
                value="<?php echo $_COOKIE['password'] ?>";
                <?php
            }
            ?>
            ><br>
            <!-- <button class="text-white bg-orange-600 text-[20px] border-2 mt-4">Đăng nhập</button> -->
            <input class="ml-8" type="checkbox" id="" name="checkbox" value="">
        <labe class="font-bold" for="">Ghi nhớ tài khoản</label><br>
            <input type="submit" class="text-white bg-orange-600 text-[20px] border-2 mt-4" value="Đăng nhập" name="submit">
        </form>
        <p>
            <a class="mt-[50px]" href="index.php?act=forget_password">
                <li>Quên mật khẩu</li>
            </a>
        </p>
        <p>
            <a href="index.php?act=register">
                <li>Đăng kí thành viên</li>
            </a>
        </p>
        <?php
         if(!empty($err)){
            echo "<p class='text-red-600'>";
            echo $err;
            echo "</p>";
        }
        ?>
    </section>
            
</body>
</html>