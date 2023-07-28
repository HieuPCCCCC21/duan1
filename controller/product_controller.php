<?php
function product_ctr() {
    $all_categories = all_category();
    $all_product = all_product();

    if (isset($_POST['listok'])) {
        $selected_category = $_POST['id_cate'];
        $all_product = all_product($selected_category);
    }

    render("admin/list_product", ['all_product' => $all_product, 'all_category' => $all_categories]);
}

function add_product_ctr(){
    $all_categories = all_category();
    render('admin/add_product',['all_categories'=>$all_categories]);
}

function insert_product_ctr() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
        $category_id = $_POST["id_cate"];
        $title = $_POST["name"];
        $description = $_POST["mota"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $sizes = $_POST["sizes"];
        if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            $target_dir = "layout/images/products/";
            $target_file = $target_dir . basename($_FILES['img']['name']);
            $thumbnail = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        } else {
            // Xử lý nếu không có hình ảnh được tải lên
            $thumbnail = '';
        }
        try {
            $product_id = insert_product($category_id, $title, $thumbnail, $description, $quantity, $price, $sizes);
            header("location:?act=show_product_admin"); 
            // ...

        } catch (PDOException $e) {
            // Xử lý thông báo lỗi
            // ...
        }
    }
}
function update_product_ctr(){
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
        // Get the product ID from the form
        $product_id = $_POST["product_id"];
        $category_id = $_POST["id_cate"];
        $title = $_POST["name"];
        $description = $_POST["mota"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $sizes = $_POST["sizes"];

        // Check if a new thumbnail image is uploaded
        if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            $target_dir = "layout/images/products/";
            $target_file = $target_dir . basename($_FILES['img']['name']);
            $thumbnail = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        } else {
            // If no new thumbnail is uploaded, keep the existing thumbnail
            $thumbnail = $_POST["old_thumbnail"];
        }

        try {
            // Call the edit_product() function to update the product
            edit_product($product_id, $category_id, $title, $thumbnail, $description, $quantity, $price, $sizes);

            // Redirect the user to the product listing page after successful update
            header("Location: index.php?act=show_product_admin");
            exit();
        } catch (PDOException $e) {
            // Handle the error if necessary
            echo "Error: " . $e->getMessage();
        }
    }
}


function delete_product_ctr(){
    // Kiểm tra xem người dùng đã gửi yêu cầu xóa sản phẩm hay chưa
    if (isset($_GET['act']) && $_GET['act'] === 'delete_product' && isset($_GET['id'])) {
    // Lấy ID sản phẩm từ tham số truy vấn
    $product_id = $_GET['id'];

    // Gọi hàm delete_product để xóa sản phẩm dựa vào ID
    delete_product($product_id);
    header("location:?act=show_product_admin"); 


    // Thực hiện xử lý chuyển hướng hoặc thông báo thành công nếu cần thiết
    // Ví dụ:
    // header("Location: index.php?act=product_list");
    // exit();
    // Hoặc thông báo thành công:
    // echo "Xóa sản phẩm thành công!";
}

}
?>