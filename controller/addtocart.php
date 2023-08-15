<?php
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
function addtocart(){
    render("addtocart");
}
function show_gh(){
    $thanhtoan=0;
    if ( isset($_POST['button_gh'])){
        $thumbnail  = $_POST['thumbnail_gh'];
        $title      = $_POST['title_gh'];
        $price      =  $_POST['price_gh'];
        $quantity   =  $_POST['quantity_gh'];
        $name_size  =  $_POST['name_size_gh'];
        $thanhtien  = $price * $quantity;
        $thanhtoan += $thanhtien;
        $id=$_POST['id_sp'];    
        $add=[
            $thumbnail,$title,$price,$quantity,$name_size,$thanhtien,$thanhtoan,$id
        ];
        $_SESSION['mycart'][]=$add;
     
        // var_dump($_SESSION['mycart']);

    }
    render('addtocart',['addtocart'=>$_SESSION['mycart']]);
}
