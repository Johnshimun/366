<?php

// PLSY:
// 1. Generate a random number ===> store it in the session 
// 2. Have a form where user enter their guess
// 3.  form validation logic ==> determine whether the guess is too high
// 4. store the history of the session
// 5. Clear the session when the user clicks "startover" 

$num = rand(1,100);
session_start();

// user has already "destroy"



if(isset($_POST['destroyfoo'])) {
    session_destroy();
    session_start();
}

if(!isset($_SESSIONS['RandomVal'])) { 
    $_SESSION['RandomVal'] = rand(1,100);
}

if(isset($_POST['guess'])) {
   if($_post['guess'] == $_SESSIONS['RandomVal'] ) {
       echo "winner winner chicken dinner";
}

      else if(isset($_POST['guess'])) {
   if($_post['guess'] <= $_SESSIONS['RandomVal'] ) {
       echo "you're too low";
   }
     else
   echo "you're too high"

    

?>


<!DOCTYPE html>

<html>
    <head></head>
    <body>
         <form method = "post">
        Guess the number: <input type="text" name = "guess"> </input>
        <input type ="submit" name="guess-btn"  value="Submit"></input>
          </form>
          <?php printHistory(); ?>
            
         <form method = "post">          
         <input type="submit" name = "destroy" value="Start Over"> </input>
        </form>
    </body>
</html>