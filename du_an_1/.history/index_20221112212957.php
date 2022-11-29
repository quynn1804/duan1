<?php

session_start();
?>
<link rel="stylesheet" href="./src/font/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
<?php
include "./model/connect.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //admin
            // ===========Add product ==================
        case 'add_product':
            require_once './view/admin/heading_admin.php';
            add_product();
            require_once "./control/admin/add_product.php";
            break;

            // ==================Add Type==================
        case 'add_type':
            require_once "./view/admin/heading_admin.php";
            add_type();
            require_once "./control/admin/add_type.php";
            break;

            //  =========================Show Type======================   
        case 'show_type':
            require_once "./view/admin/heading_admin.php";
            require_once "./view/admin/show_type.php";
            break;
            //  =========================Show Type======================   
        case 'show_product':
            require_once "./view/admin/heading_admin.php";
            require_once "./view/admin/show_product.php";
            break;
            //  ========================= Xóa Type======================   
        case 'xoa_type':
            require_once "./view/admin/heading_admin.php";
            require_once "./control/admin/xoa_type.php";
            break;
            //  ========================= Xóa product======================   
        case 'xoa_product':
            require_once "./view/admin/heading_admin.php";
            require_once "./control/admin/xoa_product.php";
            break;
            //  ========================= Show account======================   
        case 'show_account':
            require_once "./view/admin/heading_admin.php";
            require_once "./control/admin/show_account.php";
            break;
            //  ========================= Show account======================   
        case 'sua_product':
            require_once "./view/admin/heading_admin.php";
            require_once "./control/admin/sua_product.php";
            break;
             //  ========================= Show account======================   
        case 'sua_type':
            require_once "./view/admin/heading_admin.php";
            require_once "./control/admin/sua_type.php";
            break;
            // ===================================Account=================
            //Dao

            //Client
            // case 'home_user':
            //     require_once "home_user.php";
            //     break;
            case 'home_user':
                require_once "home_user.php";
                break;
        case 'account':
            require_once "./view/client/heading_client.php";
            require_once "./view/client/login.php";
            break;
        case 'register':
            require_once "./view/client/heading_client.php";
            require_once "./view/client/register.php";
            break;
    }
} else {
    require_once "./view/client/heading_client.php";
    // require_once "./view/client/heading_client.php";
    // require_once "./view/client/cart.php";

}
