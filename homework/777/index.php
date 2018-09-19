<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
             <styles>
               @import url("css/styles.css");
            </styles> 
             /* adding styles makes everything red. Line 50 doesn't want to cooperate, may be because .DS store wont upload, left off at pg 14 */
    </head>
    <body>
        
        
        
        
        <?php
        
        
        for ($i=1; $i<4; $i++){
            ${"randomValue" . $i } = rand(0,2);
            displaySymbol(${"randomValue" . $i} );
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
        function displaySymbol($randomValue){
       /* if ($randomValue == 0) {
            echo '<img src="img/seven.png" alt= "seven" title="seven" width="70" />';
        } else if ($randomValue == 1) {
           echo '<img src="img/cherry.png" alt= "cherry" title="Cherry" width="70" />';
        } else {
            echo '<img src="img/lemon.png" alt= "lemon" title="lemon" width="70" />'; 
            
        } 
        switch ($randomValue) {
            case 0: echo '<img src="img/seven.png" alt= "seven" title="seven" width="70" />';
            break;
            case 1: echo '<img src="img/cherry.png" alt= "cherry" title="Cherry" width="70" />';
            break;
            case 2: echo '<img src="img/lemon.png" alt= "lemon" title="lemon" width="70" />'; 
            break; 
            
        } */
        switch ($randomValue) {
            case 0: $symbol ="seven";
            break;
            case 1: $symbol ="bar";
            break;
            case 2: $symbol ="cherry";
            break; 
        }
        echo "<img src='img/$symbol.png' alt= '$symbol' title='" . ucfirst($symbol)."' width='70'>"; 
        function displayPoints($randomValue1, $randomValue2, $randomValue3) {
        
        echo "<div id= 'output'>";
        if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
            switch ($randomValue1) {
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
                        break;
                case 1: $totalPoints = 900;
                        break;
                case 2: $totalPoints = 250;
                        break;
            }
                echo "<h2> You won $totalPoints points!<h2>";
        } else {
            echo "<h3> Try Again!</h3>";
        }
        echo "</div>"; 
    }
   /* function play() {
          for ($i=1; $i<4; $i++){
            ${"randomValue" . $i } = rand(0,2);
            displaySymbol(${"randomValue" . $i} );
            displayPoints($randomValue1, $randomValue2, $randomValue3);
    } 
       
        }      
        
    ?>
    <div id="main">
        <?php
             play();
        ?>
        <form>
            <input type="submit" value="Spin!"/>
        </form>
    </div> */
    </body>
</html>