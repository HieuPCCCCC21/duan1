<?php
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
function addtocart()
{
    if (isset($_POST) && $_POST != '') {
        $id         = isset($_POST['v_id']) ? $_POST['v_id'] : '';
        $thumbnail  = isset($_POST['v_thumbnail']) ? $_POST['v_thumbnail'] : '';
        $title      = isset($_POST['v_title']) ? $_POST['v_title'] : '';
        $price      = isset($_POST['v_price']) ? $_POST['v_price'] : '';
        $quantity   = isset($_POST['v_quatiny']) ? $_POST[' '] : 1;  
    }
    render("footer",['mycart'=>$_SESSION['mycart']]);
}

?>