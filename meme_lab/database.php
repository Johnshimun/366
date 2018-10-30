<?php
// connect to our mysql database server


function getDatabaseConnection() {
    if ($_SERVER['SERVER_NAME'] == "helloworldjohn-jshimun.c9users.io") { //running on Cloud9
        $host = "localhost";
        $username = "johns";
        $password = "johns";
        $dbname = "meme_lab"; 
    } else {
        //running on Horuku
          $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "bc3d230aa817a7";
        $password = "3d4dd0a1";
        $dbname = "heroku_3a70e5aeb322909";
        
    }
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

echo $_SERVER['SERVER_NAME'];
echo "<br>";
?>
