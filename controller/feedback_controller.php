<?php
function feedback(){
    render('feedback');
}
function list_feedback(){
    $all_feedback = all_feedback();
    render('admin/list_feedback',['list_feedback'=>$all_feedback]);
}