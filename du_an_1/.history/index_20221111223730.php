<?php

session_start();

require "model/connect.php";
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
            // ===================================Account=================
            //Dao
        case 'sign_up':


            break;
        case 'login':

        case 'logout':

            //Client
        case 'account':
            require_once "./view/client/heading_client.php";
            require_once "./view/client/login.php";
    }
} else {
    require_once "home_user.php";
}
