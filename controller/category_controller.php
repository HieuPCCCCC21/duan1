<?php
function category_ctr(){
    $all_categories = all_category();
    $count_categories = all_category();
    render('admin/list_category',['all_categories'=>$all_categories,'count_categories'=>$count_categories]);
}
function add_category_ctr(){
    render('admin/add_category');
}
function insert_category_ctr(){
    if (isset($_POST['add']) && ($_POST['add'])) {
        $tendm = $_POST['tendm'];
        if (empty($tendm)) {
            $thongbao = "Tên loại không được để trống.";
        } else {
            insert_danhmuc($tendm);
            $thongbao = "Thêm thành công.";
            header("location:?act=show_category_admin");
        }
    }
}
?>