<?php 
function home_admin(){
    if (isset($_SESSION['user'])) { 
        render("admin/index");
    }else{
        render("admin/404");
    }
    
}
?>