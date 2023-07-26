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
    if (isset($_POST['add']) && ($_POST['add'])) {
        $id_cate = $_POST['id_cate'];
        $tensp = $_POST['name'];
        $giasp = $_POST['price'];
        $mota = $_POST['mota'];
        $quantity = $_POST['quantity'];
        $classify = $_POST['classify'];
        $sizes = array(); // Khởi tạo mảng để lưu thông tin về size

        // Xử lý thông tin về size
        if (isset($_POST['sizes'])) {
            $selected_sizes = explode(',', $_POST['sizes']);
            foreach ($selected_sizes as $size) {
                // Tách tên và số lượng size
                $size_parts = explode('-', $size);
                if (count($size_parts) === 2) {
                    $size_name = $size_parts[0];
                    $size_quantity = $size_parts[1];

                    // Kiểm tra xem size đã tồn tại trong bảng `sizes` chưa
                    $sql_check_size = "SELECT id FROM sizes WHERE name = '$size_name'";
                    $size_id = pdo_query_value($sql_check_size);

                    // Nếu size chưa tồn tại, thêm thông tin về size vào bảng `sizes`
                    if (!$size_id) {
                        $size_id = insert_size($size_name);
                    }

                    // Thêm thông tin về size vào mảng $sizes
                    $sizes[] = array('id' => $size_id, 'quantity' => $size_quantity);
                }
            }
        }

        // Xử lý hình ảnh
        $target_dir = "layout/images/products/";
        $target_file = $target_dir . basename($_FILES['img']['name']);
        $hinh = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

        // Gọi hàm insert_product và truyền thông tin về size vào hàm này
        insert_product($tensp, $giasp, $hinh, $mota, $id_cate, $classify, $sizes,$quantity);
    } 
    header("location:?act=show_product_admin");    
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