<?php
include 'db.php';
$conn = getDatabaseConnection("cstFinal");
$date = $_GET["date"];
$start = $_GET["start"];
$end = $_GET["end"];
$sql = "INSERT INTO `time` (`start`,`end`,`date`) VALUES ('$start','$end','$date');";

$conn->query($sql);

?>