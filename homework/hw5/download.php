<?php
 include 'dbConn.php';
 $conn = getDatabaseConnection("imgUpload");
 
 $sql= "SELECT fileName FROM imgtable";
 
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>