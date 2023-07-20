<?php

function register()
{
    render("register");
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
        if (empty($_POST['phone'])) {
            $error['phone'] = "sdt không được để chống";
        } else {
            $phone = $_POST['phone'];
        }
        if (!preg_match($result, $_POST['phone'])) {
            $error['phone'] = "kiểm tra lại số điện thoại";
        } else {
            $error['phone'] = "";
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
        }
    }
    render("register", ['error' => $error]);
}
