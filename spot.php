<?php
$apiKey = "BQCVS-GAb02xLspEplXkI5ElvfC2dVdOY4unDP3RBj5X9dcUKXscMFVt5l8bFBxx0mmPenRiAeR9XaTpLCJq2XjSQItY7Vk8e29FB3pqfE5nhbXO5ZY8flZiB33IHnLzrmhO9rEb4oFNhTyjrsCvsDt4d5LSefjjeA";
/*
curl -X "GET" "https://api.spotify.com/v1/artists?ids=0oSGxfWSnnOXhD2fKuz2Gy%2C3dBVyJ7JuOMt4GE9607Qin" 
-H "Accept: application/json" 
-H "Content-Type: application/json" 
-H "Authorization: Bearer BQCQMw-PzLIAs_lvkrsyCHuww8NMTb8Ui2AjFgGehcGplpgSbKaA8qC9VvM8oPFCD9B8yGNKZ7Rns2fVtNl35wEuxOCFGFed-cSaXuekmrXq8J2bHCAqhFYhPN-EtXCcaahRmI0tdgDnItXtO8FT9BB2JH-zG4hqrw"
*/
//step1
$cSession = curl_init();

//step2
curl_setopt($cSession,CURLOPT_URL,"https://api.spotify.com/v1/recommendations/available-genre-seeds");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
curl_setopt($cSession,CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
));

//step3
$results = curl_exec($cSession);
$errno = curl_errno($cSession);

if ($errno) {
    var_dump($errno);
    curl_close($cSession);
    exit();
}

//step4
curl_close($cSession);

//step5
$musicData = json_decode($results);

//var_dump($musicData);


// header("Content-Type: application/json");

echo $musicData->genres[0];


?>