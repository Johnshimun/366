<?php
// connect to our mysql database server

function getDatabaseConnection() {
     if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false) {
        // running on cloud9
    $host = "localhost";
    $username = "johns";
    $password = "johns";
    $dbname = "memes_v2"; 
     } else {
        // running on Heroku
        //mysql://bc3d230aa817a7:3d4dd0a1@us-cdbr-iron-east-01.cleardb.net/heroku_3a70e5aeb322909?reconnect=true
        $host = "@us-cdbr-iron-east-01.cleardb.net";
        $username = "bc3d230aa817a7";
        $password = "3d4dd0a1"; 
        $dbname = "heroku_3a70e5aeb322909"; 
    }
    
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}
// temporary test code
//$dbConn = getDatabaseConnection(); 
?>