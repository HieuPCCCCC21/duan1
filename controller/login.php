<?php

function login()
{
    render("login");
}
function login__user_ctr()
{
    $error = [];
    if (isset($_POST['btn_login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check_email = check_email($email, $password);
        if ($email == "" && $password == "") {
            $error['error'] = "vui lòng nhập lại tài khoản mật khẩu";
        }
         else {
            if (is_array($check_email)) {
                $_SESSION['email'] = $check_email;
                $thongbao = "tài khoản đăng nhập thành công";
                header('location:?act=home');
            }
        }
    }
    render("login", ['error' => $error]);
}
