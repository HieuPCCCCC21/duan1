<?php 
// Model 
require_once "model/pdo.php";
require_once "model/taikhoan.php";
require_once "model/category.php";
require_once "model/product.php";
// Controller 
require_once "controller/product_controller.php";
require_once "controller/controller.php";
require_once "controller/register.php";
require_once "controller/category_controller.php";
//Controller
$act = isset($_GET['act']) ? $_GET['act'] : '/';
    switch ($act) {
        case "/":
        case 'add_product':
            add_product_ctr();
            $list_category = all_category();
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
        case 'add_category':
            add_category_ctr();
            break;
        case 'save_add_category':
            insert_category_ctr();
            break;
        case 'value':
            # code...
            break;
        case "register":
            register();
        break;
        case "register_add":
            register_user_ctr();        
        break;
        default:
            include "";
            break;
    }

?>