<?php
include 'db.php';
$conn = getDatabaseConnection("favorites");
$sql = "SELECT url FROM imgurl";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>