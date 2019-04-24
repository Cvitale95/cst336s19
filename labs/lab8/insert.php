
<?php
include 'db.php';
$conn = getDatabaseConnection("heroku_e668be4425805cc");
$fav = $_GET["iconfav"];
$sql = "INSERT INTO `imgurl` (`url`) VALUES ('$fav');";

$conn->query($sql);

?>