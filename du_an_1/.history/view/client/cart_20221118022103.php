<?php
// unset($_SESSION['cart']);
// var_dump($_SESSION['cart']);
// die();
$cart = $_SESSION['cart'];
?>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/font/fontawesome-free-6.1.1-web/css/all.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="./src/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./src/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./src/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/style.css" type="text/css">
<link rel="stylesheet" href="./src/css/style.css">
<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Ảnh</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <?php
                            $total_all = 0;
                            foreach($cart as $key => $value):
                                
                                // var_dump($value['quantity']);
                                // die();
                                $total = $value['product_quantity'] * $value['product_price'];
                                $total_all += $total;
                             ?>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <h5><?=$value["product_name"] ?></h5>
                                    </td>
                                    <td class="shoping__cart__item">
                                    <img src="./src/imgs/img_product/<?=$value["product_avatar"] ?>" alt="" width="100px">
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?=$value["product_price"] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">

                                        <div class="quantity">
                                            <form action="./index.php?act=add_cart&id=<?=$value['product_id'] ?>" method="post">
                                            <div class="pro-qty">
                                                <input type="number" name="quantity" min="0" value="<?=$value['product_quantity']?>">
                                            </div>
                                            <input type="submit" name="update_quantity" value="Sửa" >
                                            </form>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                       <?=$total ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                       <a href="" class=".btn-link"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                            <?php endforeach; 
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="./index.php?act=shop" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                     
                        <ul>
                             <!-- <li>Subtotal <span>$454.98</span></li>  -->
                             <li>Tiền giảm giá<span></li>
                            <li>Tổng tiền<span><?=$total_all?></span></li>
                        </ul>
                        
                        <!-- <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                        <input type="submit" class="primary-btn" name="checkout" value="Đặt hàng">
                    </div>
                </div>
            </div>
        </div>
        <script src="./src/js/jquery-3.3.1.min.js"></script>
    <script src="./src/js/bootstrap.min.js"></script>
    <script src="./src/js/jquery.nice-select.min.js"></script>
    <script src="./src/js/jquery-ui.min.js"></script>
    <script src="./src/js/jquery.slicknav.js"></script>
    <script src="./src/js/mixitup.min.js"></script>
    <script src="./src/js/owl.carousel.min.js"></script>
    <script src="./src/js/main.js"></script>
    </section>