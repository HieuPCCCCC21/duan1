<?php
function list_nam($id){
    $list_nam=loadall_nam($id);
    render("list_nam",['list_nam'=>$list_nam]);
}
?>