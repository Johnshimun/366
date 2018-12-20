<?php
// connect to our mysql database server

function getDatabaseConnection() {
    
    if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false) {
        $host = "localhost";
        $username = "johns";
        $password = "johns"; //best practice: defined in a seperate file
        $dbname = "comics";
    }else{
        // running on Heroku
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username =  "bc3d230aa817a7";
        $password = "3d4dd0a1"; 
        $dbname = "heroku_3a70e5aeb322909"; 
    }
    // Create connection
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}
?>