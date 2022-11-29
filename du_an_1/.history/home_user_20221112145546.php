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
    <link rel="stylesheet" href="./src/font/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
<header class="bg-gray-100 pb-4">
    <section class="bg-red-500 flex mb-4 justify-around">
        <div class="w-[555px]">
            <p class="text-white ">Chào mừng bạn đến với mẫu website bán hàng của DKQT</p>

        </div>
        <div class="">
            <ul class="flex pr-auto gap-8">
                <a href="index.php?act=account">
                    <li class="hover:bg-red-500 text-white">Tài khoản</li> 
                </a>
                
                <a href="index.php?act=home_user">
                    <li class="hover:bg-red-500 text-white">Liên hệ</li> 
                </a>
            </ul>
        </div>
    </section>
    <section class="max-w-6xl mx-auto mb-[40px]">
        <div class="flex justify-between items-center mb-[20px]">
            <div class="header_logo">
                <img class="rounded-full" src="./src/imgs/img_type/kkkk.jpg" alt="" width="100px"
                    height="100px" class="header_logo-img" class="bg-none">
            </div>
            <div class="header_search">
                <input type="text" class="w-[517px] h-[31px] border border-orange-600"
                    placeholder="Tìm kiến sản phẩm...">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
            <div class="header_hotline">
                <span class="w-[60px] h-[30px] border border-red-600 p-3 rounded-xl bg-red-600 text-white">
                    HOTLINE: 0346938386
                </span>
            </div>
        </div>
        <div class="flex justify-between mb-8">
            <div>
                <span class="w-[270px] h-[45px] p-3 bg-red-600 text-white"><i class="fa-solid fa-bars"></i> DANH MỤC SẢN
                    PHẨM</span>
            </div>
            <div class="menu">
                <ul class="flex space-x-8 bg-white">
                <a href="index.php?act=home_user">
                    <li class="hover:bg-red-500">Trang chủ</li> 
                </a>
                   
                <a href="index.php?act=san_pham">
                    <li class="hover:bg-red-500">Sản phẩm</li> 
                </a>

                <a href="index.php?act=home_user">
                    <li class="hover:bg-red-500">Tin tức</li> 
                </a>

                <a href="index.php?act=home_user">
                    <li class="hover:bg-red-500">Liên hệ</li> 
                </a>

                <a href="index.php?act=home_user">
                    <li class="hover:bg-red-500">Giới thiệu</li> 
                </a>
                </ul>
            </div>
            <div>
                <span><a href="" class="w-[100px] h-[30px] bg-orange-600 p-3 rounded-xl text-white">Giỏ hàng <i
                            class="fa-solid fa-cart-shopping"></i></a></span>
            </div>
        </div>
        <div class="flex basis-[30%]     ">
            <ul class="space-y-4 w-[195px] bg-white mr-8 px-4 ">
                <!-- <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i> Quần áo nam</a></li>
                <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i> Giày dép nam</a></li>
                <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i> Quần áo nữ</a></li>
                <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i> Giày dép nữ</a></li>
                <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i> Bán chạy nhất</a></li> -->
            <?php
            $sql = "SELECT * FROM `type`";
            $query = getAll($sql);
            foreach($query as $item){
                ?>
                <a href="">

                    <li class="hover:bg-orange-500"><a href=""><i class="fa-solid fa-star font-bold"></i><?= $item['type_name'] ?></a></li>
                </a>
                <?php
            }
            ?>

            </ul>
            <div class=" basis-[70%] ">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/baner-nuoc-hoa2.jpg"
                                alt="First slide">
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </header>

    <section>
        <div></div>
    </section>

    <section class="max-w-6xl mx-auto">
        <div>
            <h2 class="text-center text-red-600 text-[30px] mb-[10px]"><i class="fa-solid fa-shop"></i> Top bán chạy
                nhất tuần</h2>
            <div class="container text-center">
                <div class="grid grid-cols-3 gap-8">
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-8">
                <div class="grid grid-cols-3 gap-8">
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                    <div class="col flex">

                        <div class="image"> <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold ">2.5000.000 Đ</span> <br>
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">thêm giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-6xl mx-auto flex gap-8 mt-8">
        <div>
            <img class="" src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/sieu-sale-nuoc-hoa.jpg" alt="">
        </div>
        <div>
            <img class="" src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/sieu-sale-nuoc-hoa1.jpg"
                alt="">
        </div>
    </section>
    <div class="bg-gray-200 pb-8">
        <section class="max-w-6xl mx-auto  gap-8 mt-8">
            <div class="grid grid-cols-5">
                <div class="col-span-1 ">
                    <button class="w-[200px] bg-orange-500 text-white font-bold text-[25px]">nước hoa nam</button>

                    <div class="bg-white h-[280px] leading-8 ">
                        <div class="flex gap-8 text-center  my-8">
                            <a class="" href="">áo nam</a>
                            <a class="" href="">áo nữ</a>
                        </div>
                        <div class="flex gap-8 text-center  my-8">
                            <a class="" href="">quần Nam</a>
                            <a class="" href="">quần nữ</a>
                        </div>
                        <div class="flex gap-8 text-center  my-8">
                            <a class="" href="">dầy nam</a>
                            <a class="" href="">dầy nữ</a>
                        </div>
                    </div>
                </div>

                <div class="col-span-4">
                    <div></div>
                    <ul class="flex gap-8 mt-2 bg-white justify-end pr-8">
                        <li><a class="text-[18px]" href="">hoa cỏ</a></li>
                        <li><a class="text-[18px]" href="">thơm ngát</a></li>
                        <li><a class="text-[18px]" href="">gỗ thơm</a></li>
                        <li><a class="text-[18px]" href="">Cam chanh</a></li>
                    </ul>

                    <div class="grid grid-cols-4 mt-8 bg-white">
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>

        <section class="max-w-6xl mx-auto  gap-8 mt-8">
            <div class="grid grid-cols-5">
                <div class="col-span-1 mx-4 mt-2">
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/banner-quang-cao-nuoc-hoa1.jpg"
                        alt="">
                </div>
                <div class="col-span-4 mx-4 mt-2">

                    <div class="grid grid-cols-4 mt-1 bg-white">
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end content 1 -->
 
        <section class="max-w-6xl mx-auto  gap-8 mt-8">
            <div class="grid grid-cols-5">
                <div class="col-span-1 mx-4 mt-2">
                    <button class="w-[200px] bg-orange-500 text-white font-bold text-[25px]">nước hoa nam</button>

                    <div class="mt-6   bg-white h-[280px] leading-8 ">
                        <div class=" flex gap-8 text-center   ">
                            <a class="mt-4 ml-2" href="">áo nam</a>
                            <a class="mt-4 ml-2" href="">áo nữ</a>
                        </div>
                        <div class="flex gap-8 text-center">
                            <a class="mt-8 ml-2" href="">quần Nam</a>
                            <a class="mt-8 ml-2" href="">quần nữ</a>
                        </div>
                        <div class="flex gap-8 text-center">
                            <a class="mt-[50px] ml-2" href="">dầy nam</a>
                            <a class="mt-[50px] ml-2" href="">dầy nữ</a>
                        </div>
                    </div>
                </div>

                <div class="col-span-4">
                    <div></div>
                    <ul class="flex gap-8 mt-2 bg-white justify-end pr-8">
                        <li><a class="text-[18px]" href="">hoa cỏ</a></li>
                        <li><a class="text-[18px]" href="">thơm ngát</a></li>
                        <li><a class="text-[18px]" href="">gỗ thơm</a></li>
                        <li><a class="text-[18px]" href="">Cam chanh</a></li>
                    </ul>

                    <div class="grid grid-cols-4 mt-8 bg-white">
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>
        <!-- end content 2 -->
        <section class="max-w-6xl mx-auto  gap-8 mt-8">
            <div class="grid grid-cols-5">
                <div class="col-span-1 mx-4 mt-2">
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/banner-quang-cao-nuoc-hoa1.jpg"
                        alt="">
                </div>
                <div class="col-span-4 mx-4 mt-2">

                    <div class="grid grid-cols-4 mt-1 bg-white">
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="bg-gray-200">
            <section class="max-w-6xl mx-auto  gap-8 mt-8">
                <div class="grid grid-cols-5">
                    <div class="col-span-1 mx-4 mt-2">
                        <button class="w-[200px] bg-orange-500 text-white font-bold text-[25px]">nước hoa nam</button>

                        <div class="mt-6   bg-white h-[280px] leading-8 ">
                            <div class=" flex gap-8 text-center   ">
                                <a class="mt-4 ml-2" href="">áo nam</a>
                                <a class="mt-4 ml-2" href="">áo nữ</a>
                            </div>
                            <div class="flex gap-8 text-center">
                                <a class="mt-8 ml-2" href="">quần Nam</a>
                                <a class="mt-8 ml-2" href="">quần nữ</a>
                            </div>
                            <div class="flex gap-8 text-center">
                                <a class="mt-[50px] ml-2" href="">dầy nam</a>
                                <a class="mt-[50px] ml-2" href="">dầy nữ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4">
                        <div></div>
                        <ul class="flex gap-8 mt-2 bg-white justify-end pr-8">
                            <li><a class="text-[18px]" href="">hoa cỏ</a></li>
                            <li><a class="text-[18px]" href="">thơm ngát</a></li>
                            <li><a class="text-[18px]" href="">gỗ thơm</a></li>
                            <li><a class="text-[18px]" href="">Cam chanh</a></li>
                        </ul>

                        <div class="grid grid-cols-4 mt-8 bg-white">
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </section>


            <section class="max-w-6xl mx-auto  gap-8 mt-8">
                <div class="grid grid-cols-5">
                    <div class="col-span-1 mx-4 mt-2">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/banner-quang-cao-nuoc-hoa1.jpg"
                            alt="">
                    </div>
                    <div class="col-span-4 mx-4 mt-2">

                        <div class="grid grid-cols-4 mt-1 bg-white">
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                    alt="">
                                <div class="text-center">
                                    <p>Lancome Tresor EDP</p>
                                    <span class="text-[20px] text-red-500">2500000</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="max-w-6xl mx-auto bg-white text-red-500 mt-8">
                <h3 class="font-bold text-[20px] mt-4 ml-4">Có thể bạn sẽ thích</h3>
                <div class="grid grid-cols-5">

                    <div class="content">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                        <div class="text-center">
                            <p>Lancome Tresor EDP</p>
                            <span class="text-[20px] text-red-500">2500000</span>
                        </div>
                    </div>
                    <div class="content">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                        <div class="text-center">
                            <p>Lancome Tresor EDP</p>
                            <span class="text-[20px] text-red-500">2500000</span>
                        </div>
                    </div>
                    <div class="content">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                        <div class="text-center">
                            <p>Lancome Tresor EDP</p>
                            <span class="text-[20px] text-red-500">2500000</span>
                        </div>
                    </div>
                    <div class="content">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                        <div class="text-center">
                            <p>Lancome Tresor EDP</p>
                            <span class="text-[20px] text-red-500">2500000</span>
                        </div>
                    </div>
                    <div class="content">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg" alt="">
                        <div class="text-center">
                            <p>Lancome Tresor EDP</p>
                            <span class="text-[20px] text-red-500">2500000</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <section class="max-w-6xl mx-auto">
        <h2 class="font-bold text-red-500 text-[30px] text-center mt-8">Tin Tức / Bài Viết</h2>

        <div class="grid grid-cols-4 gap-8 mt-8">
            <div class="content">
                <div>
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/21.jpg" alt="">
                </div>
                <div>
                    <h3 class="font-bold">Màu sắc nào sẽ thống trị làng mốt trong năm 2018?</h3>
                    <span>02/08/2018 </span> <br />
                    <span>tin tức </span> <span>admin</span> <br />
                    <p>Ultra violet: Học viện Sắc màu Pantone vừa công bố tím đậm ...</p>
                </div>
            </div>

            <div class="content">
                <div>
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/21.jpg" alt="">
                </div>
                <div>
                    <h3 class="font-bold">Màu sắc nào sẽ thống trị làng mốt trong năm 2018?</h3>
                    <span>02/08/2018 </span> <br />
                    <span>tin tức </span> <span>admin</span> <br />
                    <p>Ultra violet: Học viện Sắc màu Pantone vừa công bố tím đậm ...</p>
                </div>
            </div>


            <div class="content">
                <div>
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/21.jpg" alt="">
                </div>
                <div>
                    <h3 class="font-bold">Màu sắc nào sẽ thống trị làng mốt trong năm 2018?</h3>
                    <span>02/08/2018 </span> <br />
                    <span>tin tức </span> <span>admin</span> <br />
                    <p>Ultra violet: Học viện Sắc màu Pantone vừa công bố tím đậm ...</p>
                </div>
            </div>


            <div class="content">
                <div>
                    <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/21.jpg" alt="">
                </div>
                <div>
                    <h3 class="font-bold">Màu sắc nào sẽ thống trị làng mốt trong năm 2018?</h3>
                    <span>02/08/2018 </span> <br />
                    <span>tin tức </span> <span>admin</span> <br />
                    <p>Ultra violet: Học viện Sắc màu Pantone vừa công bố tím đậm ...</p>
                </div>
            </div>


        </div>
          <button class="text-white mx-[40%] bg-red-500 border-2 mt-4 w-[250px]">xem thêm </button>
    </section>

 <footer>
      <section class="max-w-6xl mx-auto">
                <div class="grid grid-cols-3 mt-4">
                    <div class="content flex">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/srv_1.png" alt="">
                        <div>
                            <h3 class="font-bold text-[20px]">giao hàng cực nhanh</h3>
                            <p>miễn phí với đơn hàng trên 80000 đ</p>
                        </div>
                    </div>
             
               
                    <div class="content flex">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/srv_2.png" alt="">
                        <div>
                            <h3 class="font-bold text-[20px]">giao hàng cực nhanh</h3>
                            <p>miễn phí với đơn hàng trên 80000 đ</p>
                        </div>
                    </div>
                
         
                    <div class="content flex">
                        <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/srv_3.png" alt="">
                        <div>
                            <h3 class="font-bold text-[20px]">giao hàng cực nhanh</h3>
                            <p>miễn phí với đơn hàng trên 80000 đ</p>
                        </div>
                    </div>
                </div>
      </section>
      <div class="bg-red-500">
        <section class="max-w-6xl mx-auto mb-[40px] mt-4 flex">
           <div class="img">
               <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2018/08/banner_newsletter.png" alt="">
           </div>
           <div class="email mt-[70px] ml-[150px]">
               <input class="w-[300px] h-[30px]" type="text" placeholder="địa chỉ email"> 
               <button class="bg-yellow-300 text-[20px] text-white rounded-sm  ">đăng ký</button>
           </div>
        </section>
    </div>
 </footer>

</body>

</html>