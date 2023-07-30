<?php
function register()
{
    render("register");
}
function register_admin(){
    render("admin/register_admin");
}
function register_user_ctr()
{
    $error = [];
    if (isset($_POST['btn_register'])) {
        $result = '/^0(1\d{9}|9\d{8})$/';
        $error = [];
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Họ tên không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = "email không được để chống";
        } else {
            $email = $_POST['email'];
        }
        // if (empty($_POST['phone'])) {
        //     $error['phone'] = "phone không được để chống";
        // } else {
           
        // }
        if (!preg_match($result, $_POST['phone'])) {
            $error['phone'] = "kiểm tra lại số điện thoại";
        } else {

            $phone = $_POST['phone'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = "mật khẩu không được để chống";
        } else {
            $password = $_POST['password'];
        }
        if ($_POST['password'] != $_POST['password1']) {
            $error['password1'] = "mật khẩu không trùng nhau";
        }
        if (empty($error)) {
            inser_register($fullname, $email, $phone, $password);
            header('location:?act=login');
        }
    }
    render("register", ['error' => $error]);

}
function register_user_admin_ctr() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["terms"])) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate the input data if necessary

        try {
            insert_user_admin($name, $username, $password);
            // Redirect to a success page or perform other actions upon successful registration
            // For example:
            // header("Location: registration_success.php");
            // exit();
        } catch (PDOException $e) {
            // Handle errors during registration, e.g., display an error message
            // For example:
            // echo "Registration failed. Please try again later.";
            // or you can redirect to an error page
            // header("Location: registration_error.php");
            // exit();
            throw $e;
        }
    }
}
