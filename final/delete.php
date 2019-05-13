<?php
include 'db.php';
$conn = getDatabaseConnection("heroku_e668be4425805cc");
//$conn = getDatabaseConnection("cstFinal");
$delete = $_GET["delete"];
$sql="DELETE FROM `time` WHERE id='$delete';";
$conn->query($sql);
?>