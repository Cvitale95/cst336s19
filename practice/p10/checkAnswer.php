<?php

include 'dbConnection.php';

$conn = getDatabaseConnection("quizlab");
$scoreV = $_GET["scoreV"];
$emailV = $_GET["emailV"];



$sql = "SELECT `email` FROM `quiz` WHERE email = $emailV ";

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($records == FALSE){
    $sql2= "INSERT INTO `quiz` (`email`) VALUES ('$emailV');";
    
    $conn->query($sql2);

}

//$conn->query($sql);
//receive email and score from the quiz

//1. Get latest score based on email
//2. If record found, first display it in JSON format, then update record
//3. If record not found, insert a new record for that email


?>