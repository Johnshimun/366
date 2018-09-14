<!DOCTYPE html>
    <html>
        <?php    
            echo "<div>$firstname </div>";
            $fullname=$firstname."Johnshimun";
           
            $n = 20943;
            $n = number_format($n,2); 
            echo $n  . "<br><br>";
            
            $n = rand(5,15);   
            echo $n  . "<br><br>";
            
            $n = "hElLo WoRlD!";
            echo strtoupper($n)  .  "<br><br>";


            
        ?>
    </html>