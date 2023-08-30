<?php
function feedback(){
    render('feedback');
}
function list_feedback(){
    $all_feedback = all_feedback();
    render('admin/list_feedback',['list_feedback'=>$all_feedback]);
}


function update_status_feedback(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_feedback'])) {
        foreach ($_POST['feedback_status'] as $feedbackId => $newStatus) {
            update_status($feedbackId, $newStatus);
        }
        header("location:?act=show_feedback_admin"); 
        exit();
    }
}

function delete_feedback_ctr(){
    if (isset($_GET['act']) && $_GET['act'] === 'delete_feedback' && isset($_GET['id'])) {
        $feedback_id = $_GET['id'];
        delete_feedback($feedback_id);
        header("location:?act=show_feedback_admin"); 
        }
}