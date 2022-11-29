<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../src/frame/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../src/frame/bootstrap-5.0.2-dist/js/bootstrap.js">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/">
</head>

<body>

    <header class="max-w-6xl mx-auto mb-[40px] mt-4">
        <div class="flex justify-between items-center mb-[20px]">
            <div class="header_logo">
                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/01/logo1a.png" alt="" width="100px" height="100px" class="header_logo-img" class="bg-none">
            </div>
            <div class="header_search">
                <input type="text" class="w-[517px] h-[31px] border border-orange-600" placeholder="Tìm kiến sản phẩm...">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
            <div class="header_hotline">
                <span class="w-[60px] h-[30px] border border-red-600 p-3 rounded-xl bg-red-600 text-white">
                    HOTLINE: 0346938386
                </span>
            </div>
        </div>
        <div class="flex justify-between mb-5">
            <div>
                <span class="w-[270px] h-[45px] p-3 bg-red-600 text-white"><i class="fa-solid fa-bars"></i> DANH MỤC SẢN
                    PHẨM</span>
            </div>
            <div class="menu">
                <ul class="flex space-x-8">
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                </ul>
            </div>
            <div>
                <span><a href="" class="w-[100px] h-[30px] bg-orange-600 p-3 rounded-xl text-white">Giỏ hàng <i class="fa-solid fa-cart-shopping"></i></a></span>
            </div>
        </div>

    </header>

    <section class="max-w-6xl mx-auto mb-[40px] mt-4">
        <h1 class="font-bold text-[25px]">
            Đăng nhập
        </h1>
        <form action="" method="post" class="mt-4">
            <p class="font-bold text-[18px]">tên tài khoản hoặc địa chỉ email *</p>
            <input type="text" name="username" class="border-2 w-full h-[32px] mt-2">
            <p class="font-bold text-[18px] mt-5">Mật khẩu *</p>
            <input type="text" name="password" class="border-2 w-full h-[32px] mt-2"><br />
            <button class="text-white bg-orange-600 text-[20px] border-2 mt-4">Đăng nhập</button>
            <input type="submit" class="text-white bg-orange-600 text-[20px] border-2 mt-4" value="Đăng nhập" name="submit">
            <input class="ml-8" type="checkbox" id="" name="checkbox" value="">
            <labe class="font-bold" for="">Ghi nhớ tài khoản</label><br>
        </form>
        <a class="mt-[50px]" href="">Quyên mật khẩu</a>
    </section>

    <footer class="bg-red-500">
        <section class="max-w-6xl mx-auto mb-[40px] mt-4 flex">
            <div class="img">
                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/banner_newsletter.png" alt="">
            </div>
            <div class="email mt-[70px] ml-[150px]">
                <input class="w-[300px] h-[30px]" type="text" placeholder="địa chỉ email">
                <button class="bg-yellow-300 text-[20px] text-white rounded-sm  ">đăng ký</button>
            </div>
        </section>
    </footer>
</body>
</html>