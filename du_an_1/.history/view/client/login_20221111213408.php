
<!DOCTYPE html>
<html lang="en">

    <section class="max-w-6xl mx-auto mb-[40px] mt-4">
        <h1 class="font-bold text-[25px]">
            Đăng nhập
        </h1>
        <form action="./control/client/login.php" method="post" class="mt-4">
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
            <input type="submit" class="text-white bg-orange-600 text-[20px] border-2 mt-4" value="Đăng nhập" name="submit">
            <input class="ml-8" type="checkbox" id="" name="checkbox" value="">
            <labe class="font-bold" for="">Ghi nhớ tài khoản</label><br>
        </form>
        <a class="mt-[50px]" href="">Quyên mật khẩu</a>
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