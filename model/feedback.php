<?php
// function insert_feedback($user_id, $content){
//     $sql = "INSERT INTO feedback() VALUES (?, ?)";
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute([$user_id,$content]);
// }
function insert_feedback($user_id, $content){
    $sql="INSERT INTO `feedback`( `note`, `id_user`) 
    VALUES ('{$content}','{$user_id}')";
    pdo_execute($sql);
}
?>