<?php
function category_ctr(){
    $all_category = all_category();
    $count_categories = all_category();
    render('admin/list_category',['all_categories'=>$all_category,'count_categories'=>$count_categories]);
}
function add_category_ctr(){
    render('admin/add_category');
}
function insert_category_ctr(){
    extract($_POST);
    $data = [
        $_POST['tendm']
    ];
    render('admin/add_category',['data'=>$data]);
}
?>