<?php
function new_sanphamct($id){
    if(isset($_GET['id'])){
          $listspct=loadall_spct($id);
    }
   
    $list_size= loadall_size($id);
    render("sanpham_ct",['listspct'=>$listspct,'list_size'=>$list_size]);
}
?>
