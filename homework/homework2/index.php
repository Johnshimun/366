<!DOCTYPE html>
<html>
        
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">    
    <style>
        
        
         </style>
        <title> What holiday you should focus on </title>
</head>        
<body>
  <p class = "body"> What holiday you should focus on </p>      
        



<?php
//include 'w/homework2/funtion.php';
 function Play()
    {
        for ($i = 1; $i < 4; $i++) {
            ${"randomPic" . $i} = rand(0, 5);
            displaySymbol(${"randomPic" . $i});
        }
      //  displayPoints($randomValue1, $randomValue2, $randomValue3, $randomValue4);
    }
    
    // function displaySymbol($randomPic)
    // {
    //     switch ($randomPic) {
    //         case 0:
    //             $symbol = "img1";
    //             break;
    //         case 1:
    //             $symbol = "img2";
    //             break;
    //         case 2:
    //             $symbol = "img3";
    //             break;
    //         case 3:
    //             $symbol = "img4";
    //             break;
    //         case 4:
    //             $symbol = "img5";
    //             break;
    //         case 5:
    //             $symbol = "img6";
    //             break;
    //          }
        echo "<li  src ='img/$symbol.jpg' alt='$symbol' title = '" . ucfirst($symbol) . "'width ='70'></li>";
        
    



?>

</body>

</html>