<?php

session_start();
// if (!isset($_SESSION['username'])) {
//     header("location:view/account/login.php");
    
// }

// function renderView($view)
// {
//     require_once "view/admin/trangchu/index_head.php";
//     $view;

// }

// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // ===========Add product ==================
        case 'add_product':
            require_once "home_admin.php";
            require_once "./control/add_product.php";
            break;

            // ==================Add Type==================
            case 'add_type':
            require_once "home_admin.php";
            add_type();
            require_once "./control/add_type.php";
            break;

            //  =========================Thông kê======================   

            // ===================================Account=================

        case 'sign_up':
  
           
            break;
        case 'login':
                require_once "view/account/login.php";
                break;

            case 'logout':
                        require_once "view/account/logout.php";
                            break;

    }
} else {
        require_once "home_admin.php";
}
