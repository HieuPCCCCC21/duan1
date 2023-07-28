<?php 
// Model 
require_once "model/pdo.php";
require_once "model/taikhoan.php";
require_once "model/category.php";
require_once "model/product.php";
// Controller
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
        case 'register':
            register();
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
        case 'home':
            home();
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
        case 'update_category':
            update_category();
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