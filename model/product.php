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

function insert_product($tensp, $giasp, $hinh, $mota, $iddm, $classify, $sizes, $quantity) {
    // Xử lý thông tin cơ bản về sản phẩm
    $sql_product = "INSERT INTO products (title, thumbnail, category_id, desciption, created_at, updated_at, deleted) 
                    VALUES ('$tensp', '$hinh', '$iddm', '$mota', NOW(), NOW(), 0)";
    try {
        // Thực hiện truy vấn INSERT vào bảng `products` và lấy ID của sản phẩm mới thêm vào
        $product_id = pdo_execute_return_lastInsertId($sql_product);

        // Sử dụng ID của sản phẩm mới để thêm dữ liệu vào bảng `product_detail`
        $sql_product_detail = "INSERT INTO product_detail (product_id, classify, price, quantity) 
                               VALUES ('$product_id', '$classify', '$giasp', '$quantity')";
        // Thực hiện truy vấn INSERT vào bảng `product_detail`
        pdo_execute($sql_product_detail);

        // Xử lý thông tin về size
        foreach ($sizes as $size) {
            $size_name = $size['name'];

            // Kiểm tra xem size đã tồn tại trong bảng `sizes` hay chưa
            $sql_check_size = "SELECT id FROM sizes WHERE name = '$size_name'";
            $size_id = pdo_query_value($sql_check_size);

            // Nếu size chưa tồn tại, thêm thông tin về size vào bảng `sizes`
            if (!$size_id) {
                $sql_insert_size = "INSERT INTO sizes (name) VALUES ('$size_name')";
                pdo_execute($sql_insert_size);
                $size_id = pdo_lastInsertId(); // Lấy ID của size mới thêm vào
            }

            // Thêm dữ liệu vào bảng `product_sizes`
            $sql_product_sizes = "INSERT INTO product_sizes (product_id, size_id) 
                                  VALUES ('$product_id', '$size_id')";
            pdo_execute($sql_product_sizes);
        }
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
function insert_size($size_name) {
    $sql = "INSERT INTO sizes (name) VALUES ('$size_name')";
    pdo_execute($sql);
    return pdo_lastInsertId();
}


?>