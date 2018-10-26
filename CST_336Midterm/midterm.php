<?php
include 'database.php';

$query=mysql_query("select quotes, author from q_quotes order by quote asc, RAND() limit 1");  // wont connect to database.php
echo $query[mt_rand(0, count($query)-1)];


    return $query; 
    
     // construct the proper SQL INSERT statement
    $dbConn = getDatabaseConnection(); 

    $sql = "INSERT INTO `q_quotes` (`quoteid`,'quote, `author`, `num_likes`) VALUES (NULL, '$num_likes', NOW());"; 
    
    $statement = $dbConn->prepare($sql); 
    $result = $statement->execute(); 
    
    if (!$result) {
      return null; 
    }
    
    $last_id = $dbConn->lastInsertId();

    
    //fetch the newly created object from database
    
    $sql = "select quotes from q_quotes order by quote asc, RAND() limit 1"; 
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $newMeme = $records[0]; 
    
    
    




  
    ?>
    <a href="insert.php">create</a>