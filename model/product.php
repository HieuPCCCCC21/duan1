<?php
function all_product($selected_category = null) {
    // Handle condition of selected category from form
    $category_condition = '';
    if (!empty($selected_category)) {
        $category_condition = "AND p.category_id = $selected_category";
    }

    // Query to get the product data along with sizes
    $sql = "SELECT p.*, GROUP_CONCAT(s.name_size) AS sizes
            FROM products p
            LEFT JOIN product_sizes ps ON p.id = ps.product_id
            LEFT JOIN sizes s ON ps.size_id = s.id
            WHERE p.deleted = 0 $category_condition
            GROUP BY p.id
            ORDER BY p.id DESC";

    $result = pdo_query($sql);
    return $result;
}

function insert_product($category_id, $title, $thumbnail, $description, $quantity, $price, $sizes) {
    try {
        $conn = pdo_get_connection();

        // Thêm dữ liệu vào bảng products
        $sql = "INSERT INTO products (category_id, title, thumbnail, desciption, quantity, price,created_at,updated_at,deleted) VALUES (?, ?, ?, ?, ?, ?,NOW(),NOW(),0)";
        pdo_execute($sql, [$category_id, $title, $thumbnail, $description, $quantity, $price]);

        // Lấy ID của sản phẩm vừa thêm
        $product_id = pdo_execute_return_lastInsertId("SELECT id FROM products ORDER BY id DESC LIMIT 1");
        // Thêm các size vào bảng sizes nếu chưa tồn tại và lưu lại các id của size
        $size_ids = [];
        $size_names = explode(',', $sizes);
        foreach ($size_names as $size_name) {
            // Kiểm tra xem size đã tồn tại trong bảng sizes hay chưa
            $sql = "SELECT id FROM sizes WHERE name_size = ?";
            $size_id = pdo_query_value($sql, $size_name);

            // Nếu size chưa tồn tại, thêm mới nó vào bảng sizes
            if ($size_id === null) {
                $sql = "INSERT INTO sizes (name_size) VALUES (?)";
                pdo_execute($sql, $size_name);
                $size_id = $conn->lastInsertId();
            }

            // Thêm id của size vào danh sách
            $size_ids[] = $size_id;
        }

        // Thêm các bản ghi vào bảng product_sizes để liên kết sản phẩm với các size
        $sql = "INSERT INTO product_sizes (product_id, size_id) VALUES (?, ?)";
        foreach ($size_ids as $size_id) {
            pdo_execute($sql, [$product_id, $size_id]);
        }

        unset($conn);
        return $product_id;
    } catch (PDOException $e) {
        // Gỡ rối: In thông báo lỗi chi tiết
        echo "Error: " . $e->getMessage();
        throw $e;
    }
}
function edit_product($product_id, $category_id, $title, $thumbnail, $description, $quantity, $price, $sizes) {
    try {
        $conn = pdo_get_connection();

        // Update data in the products table
        $sql = "UPDATE products SET category_id = ?, title = ?, thumbnail = ?, desciption = ?, quantity = ?, price = ?, updated_at = NOW() WHERE id = ?";
        pdo_execute($sql, [$category_id, $title, $thumbnail, $description, $quantity, $price, $product_id]);

        // Update or add new sizes for the product
        $size_ids = [];
        $size_names = explode(',', $sizes);
        foreach ($size_names as $size_name) {
            // Check if size already exists in the sizes table
            $sql = "SELECT id FROM sizes WHERE name_size = ?";
            $size_id = pdo_query_value($sql, $size_name);

            // If size does not exist, add it to the sizes table
            if ($size_id === null) {
                $sql = "INSERT INTO sizes (name_size) VALUES (?)";
                pdo_execute($sql, [$size_name]);
                $size_id =$conn->lastInsertId(); // Get the last inserted ID
            }

            // Add the size ID to the list
            $size_ids[] = $size_id;
        }

        // Update product_sizes table with the new size associations
        // First, delete all existing size associations for the product
        $sql = "DELETE FROM product_sizes WHERE product_id = ?";
        pdo_execute($sql, [$product_id]);

        // Now, insert the new size associations for the product
        $sql = "INSERT INTO product_sizes (product_id, size_id) VALUES (?, ?)";
        foreach ($size_ids as $size_id) {
            pdo_execute($sql, [$product_id, $size_id]);
        }

        unset($conn);
        return true; // Return true to indicate successful product update
    } catch (PDOException $e) {
        // Handle the error if necessary
        throw $e;
    }
}


function delete_product($product_id) {
    $sql = "UPDATE products SET deleted = 1 WHERE id = :product_id";
    try {
        pdo_execute($sql, [':product_id' => $product_id]);
    } catch (PDOException $e) {
        throw $e;
    }
}


?>