<?php

session_start();
include 'DBConnection.php';
$conn = getDBConnection();

// TODO: Grab all of our paramters from the session
$parameters[":name"]= $_SESSION["name"];
$parameters[":email"] = $_SESSION["email"];

// TODO: Execute SQL to add a row to database table
foreach($_POST as $key => $vallue){
    $_SESSION[$key] = $value;
}

// Destory the session once you submit
session_destroy();

// TODO: Return all the rows from the datable table
echo json_encode($_SESSION)
?>
