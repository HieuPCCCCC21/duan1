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
?>