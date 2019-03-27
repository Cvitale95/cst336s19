<?php

function getDatabaseConnection($dbname = "ottermart") {
    
    
    $host = "localhost";
    $username = "root";
    $password = "";
    
   
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("mysql://be4028c0a5d88f:4840c9b0@us-cdbr-iron-east-03.cleardb.net/heroku_e668be4425805cc?reconnect=true"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    } 
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    return $dbConn;
}

?>
