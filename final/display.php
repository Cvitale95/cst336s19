<?php
include 'db.php';
//$conn = getDatabaseConnection("heroku_e668be4425805cc");
$conn = getDatabaseConnection("cstFinal");
$sql ="SELECT * FROM `time`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>