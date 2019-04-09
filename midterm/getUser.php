<?php
include 'db.php';

$conn = getDatabaseConnection("cinder");

$sql = "SELECT username, id, email_address, picture_url, about_me FROM user ORDER BY id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
?>