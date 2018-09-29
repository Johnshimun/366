<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style> @import url("css/styles.css"); </style>
    </head>
    <body>
       
<?php
include 'inc/functions.php';

displayPoints($randomValue1, $randomValue2, $randomValue3);

function displaySymbol($randomValue, $pos)
{
    switch ($randomValue) {
        case 0:
            $symbol = "seven";
            break;
        case 1:
            $symbol = "bar";
            break;
        case 2:
            $symbol = "cherry";
            break;
    }
    
    echo "<img id ='reel$pos' src ='img/$symbol.png' alt='$symbol' title = '" . ucfirst($symbol) . "'width ='70'> ";
}
function displayPoints($randomValue1, $randomValue2, $randomValue3)
{
    echo "<div id = 'output'>";
    
    if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)  {
        switch ($randomValue1) {
            case 0:
                $totalPoints = 1000;
                echo "<h1> Jackpot! </h1>";
                break;
            case 1:
                $totalPoints = 900;
                break;
            case 2:
                $totalPoints = 500;
                break;
        }
        
        echo "<h2> You won $totalPoints points! </h2>";
    } else {
        echo "<h3> Try Again! </h3>";
    }
    echo "</div>";
}


?>
 <div id = "main">
        <?php
play();
?> 
        
        <form>
            <input type = "submit" value = "Spin!" />
        </form>
    </div>
  </body>
</html>