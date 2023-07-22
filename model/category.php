<?php
function all_category(){
    $sql="SELECT * FROM category WHERE deleted = 0";
    $result = pdo_query($sql);
    return $result;
}
function insert_danhmuc($tendm){
    $sql = "INSERT INTO category(name) values('$tendm')";
    pdo_execute($sql);
}
?>