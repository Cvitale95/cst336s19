<?php
session_start();
include 'DBConnection.php';

if(!isset($_SESSION["progress"])){
    $_SESSION["progress"] = 0;
}
echo json_encode($_SESSION)
?>