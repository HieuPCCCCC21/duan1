<?php
function product_ctr(){
    $all_product = all_product();
    render("admin/list_product",['all_product'=> $all_product]);
}
function add_product_ctr(){
    $all_categories = all_category();
    render('admin/add_product',['all_categories'=>$all_categories]);
}
function insert_product_ctr(){
    if (isset($_POST['add']) && ($_POST['add'])) {
        $id_cate = $_POST['id_cate'];
        $tensp = $_POST['name'];
        $giasp = $_POST['price'];
        $mota = $_POST['mota'];
        $quantity = $_POST['quantity'];
        $classify = $_POST['classify'];
        $target_dir = "layout/images/products/";
        $target_file= $target_dir.basename($_FILES['img']['name']);
        $hinh = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        insert_product($tensp, $giasp, $hinh, $mota, $id_cate,$quantity,$classify);
    }     
    
}
?>