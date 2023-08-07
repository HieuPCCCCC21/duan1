<?php
function all_order() {
    $conn = pdo_get_connection();
    $sql = "SELECT 
                u.fullname,
                o.*
            FROM
                `order` o
            INNER JOIN
                `user` u ON o.user_id = u.id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

?>