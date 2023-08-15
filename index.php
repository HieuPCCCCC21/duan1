<?php 
// Model 
// session_start();
require_once "model/cart.php";
require_once "model/pdo.php";
require_once "model/taikhoan.php";
require_once "model/category.php";
require_once "model/product.php";
require_once "model/order.php";
require_once "model/statistical.php";
// Controller
require_once "controller/thanhtoan.php";
require_once "controller/bill.php";
require_once "controller/order_controller.php";
require_once 'controller/addtocart.php';
require_once "controller/account_controller.php";
require_once "controller/404_controler.php";
require_once "controller/register.php"; 
require_once "controller/login.php"; 
require_once "controller/home_controller.php";
require_once "controller/product_controller.php";
require_once "controller/controller.php";
require_once "controller/register.php";
require_once "controller/category_controller.php";
require_once "controller/main.php";
require_once "controller/sanpham_ct.php";
require_once "controller/list_nam.php";
require_once "controller/list_nu.php";
require_once "controller/yeuthich.php";
if(!isset($_SESSION['email'])){
    $_SESSION['email']=[];
}
$act = isset($_GET['act']) ? $_GET['act'] : '/';
    switch ($act) {
        case "/":
        case 'main':
        main();
        break;
        case 'sanpham_ct':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                new_sanphamct($id);
            }
            break;
        case 'list_nam':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                list_nam($id);
            }
            break;
        case 'list_nu':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                list_nam($id);
            }
            break;
        case 'addtocart':
            addtocart();
            break;
        case 'bill':
            bill();
            break;
        case 'bill_cart':
            bill_cart();
            break;
        case 'show_gh':
            show_gh();
        break;
        case 'yeuthich':
            yeuthich();
            break;
        case 'yeu_thich_del':
            yeu_thich_del();
            break;
        case 'show_yt':
            show_yt();
            break;
        case 'home_admin':
            home_admin();
            break;
        case 'setting_account_update':
            update_user_ctr();
            break;
        case 'setting_account':
            setting_acount();
            break;
        case 'result_search_products':
            results_search();
            break;
        case 'edit_stt_order':
            update_stt_order();
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
        case 'login_admin_account':
            login_admin_ctr();
            break;
        case 'login_admin':
            login_admin();
            break;
        case 'delete_staff':
            delete_staff_ctr();
            break;
        case 'delete_user':
            delete_user_ctr();
            break;
        case 'order_detail':
            order_detail_ctr();
            break;
        case 'show_order_admin':
            order_ctr();
            break;
        case 'show_staffs_admin':
            show_staffs_ctr();
            break;
        case 'show_user_admin':
            show_customers_ctr();
            break;
        case 'change_pass_staff':
            change_password_user();
            break;
        case 'login':
            login();
            break;
        case 'lienhe':
            feed_back();
            break;
        case 'login_account':
            login__user_ctr();
            break;
        case 'exits_account':
            logout_admin();
            break;
        case '1':
            unset($_SESSION['email']);
            header("Location: index.php?act=main");
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
        case 'edit_customer':
            edit_customer_ctr();
            break;
        case 'edit_staff':
            edit_staff_ctr();
            break;
        case 'edit_product':
            edit_product_ctr();
            break;
        case 'update_customer':
            update_customer_ctr();
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
        case 'delete_order':
            delete_order_ctr();
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