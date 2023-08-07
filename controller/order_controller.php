<?php
function order_ctr(){
    $all_order = all_order();
    if (isset($_SESSION['user'])) {
        render('admin/list_order',['all_order'=>$all_order]);
    }else{
        render('admin/404');
    }
}
?>