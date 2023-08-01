<?php
function list_nu($id){
    $list_nu=loadall_nu($id);
    render("list_nu",['list_nu'=>$list_nu]);
}
?>