<?php
function inser_register($fullname,$email,$phone,$password){
    $sql="INSERT INTO `user`( `fullname`, `email`, `phone`,`password`) 
    VALUES ('{$fullname}','{$email}','{$phone}','{$password}')";
    pdo_execute($sql);
}
// function inser_register($data = [])
// {
//   $sql = "INSERT INTO user(fullname,email,phone,password) VALUES (?,?,?,?) ";
//   $conn = pdo_get_connection();
//   $stmt = $conn->prepare($sql);
//   $stmt->execute($data);
// }
?>