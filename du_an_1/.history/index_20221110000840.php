<?php

session_start();
// if (!isset($_SESSION['username'])) {
//     header("location:view/account/login.php");
    
// }

require_once "./model/connect.php";
require_once "./view/login.php";
// function renderView($view)
// {
//     require_once "view/admin/trangchu/index_head.php";
//     $view;
//     require_once "view/admin/trangchu/index_bottom.php";
// }

// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // ===========Show product ==================
        case 'add_product':
            require_once "./view/control/add_product.php";
            add_product();
            break;



            // ==================Add product==================
     

        //    ====================Customer========================== 

       

            //  =========================Thông kê======================   
            case 'thongke':
        
                require_once "view/admin/trangchu/index_head.php";
                thongke();
                require_once "view/admin/trangchu/index_bottom.php";
                break;


            // ===================================Account=================

        case 'sign_up':
            sign();
           
            break;
        case 'login':
                require_once "view/account/login.php";
                break;

            case 'logout':
                        require_once "view/account/logout.php";
                            break;

    }
} else {
        require_once "trangchu.html";
}
