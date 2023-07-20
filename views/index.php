<?php 

include "header.php";

//Controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        default:
            include "main.php";
            break;
    }
} else {
    include "main.php";
}
include "footer.php";
?>