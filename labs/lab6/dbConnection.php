<?php
function getDatabaseConnection($dbname = 'ottermart'){
    $host = 'localhost';
    $username ='root';
    $password = '';
    
    
        if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["us-cdbr-iron-east-03.cleardb.net"];
        $dbname = substr($url["path"], 1);
        $username = $url["be4028c0a5d88f"];
        $password = $url["4840c9b0"];
    } 

    
    
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
}
?>