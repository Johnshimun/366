<?php
        
  include 'database.php';
        
  function getPets(){
    $dbConn = getDatabaseConnection(); 
          
    $sql = "SELECT * FROM `pets` WHERE 1";
              
    $statement = $dbConn->prepare($sql); 
      
    $statement->execute(); 
    $records = $statement->fetchAll();
          
    $i = 0;
    foreach ($records as $record) {
      echo $record['name'];
    }
  }
  ?>