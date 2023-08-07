<?php
    require_once 'pdo.php';
    $conn = pdo_get_connection();
    if ($_SERVER["REQUEST_METHOD"] === "post" && isset($_POST["change_password"])) {
      $id_users = $_POST['id_user'];
      $password_new = $_POST['renewpassword'];
      $pass_old = $_POST['old_password'];
  
      // Truy vấn để lấy mật khẩu hiện tại của người dùng từ cơ sở dữ liệu
      $stmt = $conn->prepare("SELECT `password` FROM user WHERE id = :id");
      $stmt->bindParam(":id", $id_users);
      $stmt->execute();
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
      // Kiểm tra nếu mật khẩu hiện tại của người dùng khớp với mật khẩu đã nhập
      if ($pass_old==$user['password']) {  
        // Cập nhật mật khẩu mới vào cơ sở dữ liệu
        $stmt = $conn->prepare("UPDATE user SET `password` = :password WHERE id = :id");
        $stmt->bindParam(":password", $password_new);
        $stmt->bindParam(":id", $id_users);
        $stmt->execute();
  
        $result["success"] = true;
        $result["message"] = "Đổi mật khẩu thành công!";
      } else {
        $result["success"] = false;
        $result["message"] = "Mật khẩu cũ không đúng";
      }
    }
     else {
      $result["success"] = false;
      $result["message"] = "Yêu cầu không hợp lệ.";
    }
    // Trả về kết quả dưới dạng JSON
    header("Content-Type: application/json");
    echo json_encode($result);

?>