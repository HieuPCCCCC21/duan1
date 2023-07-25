<?php
function all_product($selected_category = null){
    // Xử lý điều kiện của danh mục đã chọn từ form
    $category_condition = '';
    if (!empty($selected_category)) {
        $category_condition = "AND p.category_id = $selected_category";
    }

    // Câu lệnh truy vấn để lấy sản phẩm
    $sql = "SELECT p.*, pd.*
            FROM products p
            LEFT JOIN product_detail pd ON p.id = pd.product_id
            WHERE p.deleted = 0 $category_condition
            ORDER BY p.id DESC";

    $result = pdo_query($sql);
    return $result;
}

function insert_product($tensp, $giasp, $hinh, $mota, $iddm, $quantity, $classify) {
    $sql_product = "INSERT INTO products (title, thumbnail, category_id, desciption, created_at, updated_at, deleted) 
                    VALUES ('$tensp', '$hinh', '$iddm', '$mota', NOW(), NOW(), 0)";
    try {
        // Thực hiện truy vấn INSERT vào bảng `products`
        $product_id = pdo_execute_return_lastInsertId($sql_product);
        // Sử dụng ID của sản phẩm mới để thêm dữ liệu vào bảng `product_detail`
        $sql_product_detail = "INSERT INTO product_detail (product_id, classify, quantity, price) 
                               VALUES ('$product_id', '$classify', '$quantity', '$giasp')";
        // Thực hiện truy vấn INSERT vào bảng `product_detail`
        pdo_execute($sql_product_detail);
    } catch (PDOException $e) {
        throw $e;
    }
}
// Hàm xóa ảo sản phẩm dựa vào ID sản phẩm
function delete_product($product_id) {
    // Xây dựng câu lệnh SQL để thực hiện xóa ảo
    $sql = "UPDATE products SET deleted = 1 WHERE id = :product_id";
    try {
        // Thực hiện câu lệnh truy vấn với tham số đã truyền vào
        pdo_execute($sql, [':product_id' => $product_id]);
    } catch (PDOException $e) {
        // Xử lý lỗi nếu cần thiết
        throw $e;
    }
}

?>