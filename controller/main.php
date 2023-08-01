<?php 
function main(){
    $list_sp=all_product();
    render("main",['list'=>$list_sp]);
}
?>