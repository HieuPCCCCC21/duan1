<?php
function all_product(){
    $sql="SELECT p.*, pd.*
    FROM products p
    INNER JOIN product_detail pd ON p.id = pd.product_id
    WHERE p.deleted = 0;";
    $result = pdo_query($sql);
    return $result;
}
function insert_product($tensp,$giasp,$hinh,$mota,$iddm,$quantity,$classify){
    $sql_product = "INSERT INTO products(title,thumbnail,category_id,desciption,created_at,updated_at, deleted) values('$tensp','$hinh','$iddm','$mota',NOW(),NOW(),0)";
    $sql_product_detail = "INSERT INTO product_detail (product_id, classify, quantity, price) 
                      VALUES ('$iddm', '$classify', '$quantity', '$giasp')";
    pdo_execute($sql_product);
    pdo_execute($sql_product_detail);
}
?>