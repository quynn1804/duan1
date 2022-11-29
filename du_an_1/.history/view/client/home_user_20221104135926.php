<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../src/frame/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../src/frame/bootstrap-5.0.2-dist/js/bootstrap.js" />
    <link rel="stylesheet" href="../src/font/fontawesome-free-6.1.1-web/css/all.css" />
</head>

<body>
    <header class="max-w-6xl mx-auto mb-[40px]">
        <div class="flex justify-between items-center mb-[20px]">
            <div class="header_logo">
                <img src="../src/imgs/kkkk.jpg" alt="" width="100px" height="100px" class="header_logo-img"
                    class="bg-none" />
            </div>
            <div class="header_search">
                <input type="text" class="w-[517px] h-[31px] border border-orange-600"
                    placeholder="Tìm kiến sản phẩm..." />
                <span>
                    <i class="fa-solid fa-magnifying-glass"></i></span>
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
                <span><a href="" class="w-[100px] h-[30px] bg-orange-600 p-3 rounded-xl text-white">Giỏ hàng <i
                            class="fa-solid fa-cart-shopping"></i></a></span>
            </div>
        </div>
        <div class="flex basis-[30%] bg-gray-200">
            <ul class="space-y-4 w-[270px]">
                <li>
                    <a href=""><i class="fa-solid fa-star"></i> Đức nè mọi người</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-star"></i> Đức nè mọi người</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-star"></i> Đức nè mọi người</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-star"></i> Đức nè mọi người</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-star"></i> Đức nè mọi người</a>
                </li>   
            </ul>
            <div class="basis-[70%] bg-gray-200">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/baner-nuoc-hoa2.jpg"
                                alt="First slide" />
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
    </header>
    <section class="max-w-6xl mx-auto">
        <div>
            <h2 class="text-center text-red-600 text-[30px] mb-[10px]">
                <i class="fa-solid fa-shop"></i> Top bán chạy nhất tuần
            </h2>
            <div class="container text-center">
                <div class="grid grid-cols-3 gap-8">
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-8">
                <div class="grid grid-cols-3 gap-8">
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                    <div class="col flex">
                        <div class="image">
                            <img class="w-[150px]"
                                src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-7.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="text-[18px] mt-2 mb-2">Lancome Tresor EDP</h3>
                            <span class="text-[20px] text-red-600 font-bold">2.5000.000 Đ</span>
                            <br />
                            <button class="bg-red-600 text-white border-2 rounded-lg my-4">
                                thêm giỏ hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-6xl mx-auto flex gap-8 mt-8">
        <div>
            <img class="" src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/sieu-sale-nuoc-hoa.jpg"
                alt="" />
        </div>
        <div>
            <img class="" src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/sieu-sale-nuoc-hoa1.jpg"
                alt="" />
        </div>
    </section>
    <div class="bg-gray-200">
        <section class="max-w-6xl mx-auto gap-8 mt-8">
            <div class="grid grid-cols-5">
                <div class="col-span-1 mx-4 mt-2">
                    <button class="w-[200px] bg-orange-500 text-white font-bold text-[25px]">
                        nước hoa nam
                    </button>

                    <div class="mt-6 bg-white h-[280px]">
                        <div class="flex gap-8 text-center">
                            <span>quần áo</span>
                            <span>quần áo</span>
                        </div>
                        <div class="flex gap-8 text-center">
                            <span>quần áo</span>
                            <span>quần áo</span>
                        </div>
                        <div class="flex gap-8 text-center">
                            <span>quần áo</span>
                            <span>quần áo</span>
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
                                alt="" />
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                alt="" />
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                alt="" />
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="http://nuochoa.sharekhoahoc.vn/wp-content/uploads/2022/02/nuoc-hoa-6.jpg"
                                alt="" />
                            <div class="text-center">
                                <p>Lancome Tresor EDP</p>
                                <span class="text-[20px] text-red-500">2500000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>