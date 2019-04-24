<?php
include 'db.php';
$conn = getDatabaseConnection("heroku_e668be4425805cc");
$fav = $_GET["iconfav"];
$sql="DELETE FROM `imgurl` WHERE url='$fav';";
$conn->query($sql);
?>