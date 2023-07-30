<?php 
// Model 
require_once "model/pdo.php";
require_once "model/taikhoan.php";
require_once "model/category.php";
require_once "model/product.php";
// Controller
require_once "controller/account_controller.php";
require_once "controller/404_controler.php";
require_once "controller/register.php"; 
require_once "controller/login.php"; 
require_once "controller/home_controller.php";
require_once "controller/product_controller.php";
require_once "controller/controller.php";
require_once "controller/register.php";
require_once "controller/category_controller.php";
//Controller
if(!isset($_SESSION['email'])){
    $_SESSION['email']=[];
}
$act = isset($_GET['act']) ? $_GET['act'] : '/';
    switch ($act) {
        case "/":
        case 'home_admin':
            home_admin();
            break;
        case 'register_admin':
            register_admin();
            break;
        case 'register_admin_account':
            register_user_admin_ctr();
            break;
        case 'register':
            register();
            break;
        case 'login_admin':
            # code...
            break;
        case 'delete_staff':
            delete_staff_ctr();
            break;
        case 'delete_user':
            delete_user_ctr();
            break;
        case 'show_staffs_admin':
            show_staffs_ctr();
            break;
        case 'show_user_admin':
            show_customers_ctr();
            break;
        case 'login':
            login();
            break;
        case 'login_account':
            login__user_ctr();
            break;
        case 'register_account':
            register_user_ctr();
            break;
        case 'delete_product':
            delete_product_ctr();
            break;
        case 'add_product':
            add_product_ctr();
            break;
        case 'save_add_product':
            insert_product_ctr();
            break;
        case 'show_product_admin':
            product_ctr();
            break;
        case 'show_category_admin':
            category_ctr();
            break;
        case 'edit_staff':
            edit_staff_ctr();
            break;
        case 'edit_product':
            edit_product_ctr();
            break;
        case 'update_staff':
            update_staff_ctr();
            break;
        case 'update_product':
            update_product_ctr();
            break;
        case 'update_category':
            update_category_ctr();
            break;
        case 'edit_category':
            edit_category_ctr();
            break;
        case 'add_category':
            add_category_ctr();
            break;
        case 'delete_category':
            delete_category_ctr();
            break;
        case 'save_add_category':
            insert_category_ctr();
            break;
        default:
            show_404();
            break;
    }

?>