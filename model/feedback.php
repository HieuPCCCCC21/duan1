<?php
function all_feedback()
{
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM feedback";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
function update_status($feedbackId, $newStatus) {
    $conn = pdo_get_connection();
    $sql = "UPDATE feedback SET status = :newStatus WHERE id = :feedbackId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_INT);
    $stmt->bindParam(':feedbackId', $feedbackId, PDO::PARAM_INT);
    $stmt->execute(); 
}
function delete_feedback($feedbackId) {
    $conn = pdo_get_connection();
    $sql = "DELETE FROM feedback WHERE id = :feedbackId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':feedbackId', $feedbackId, PDO::PARAM_INT);
    $stmt->execute();
}
function check_pass($email, $pass){
    $conn = pdo_get_connection();
    $sql = "UPDATE `user` SET `password` = :pass WHERE `email` = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
}
?>