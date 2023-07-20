<?php
function all_category(){
    $sql="SELECT * FROM category WHERE deleted = 0";
    $result = pdo_query($sql);
    return $result;
}
function insert_category($data=[]){
    $sql = "INSERT INTO category(name) values('?')";
    $connect = pdo_get_connection();
    $stmt= $connect->prepare($sql);
    $stmt->execute($data);
}
?>