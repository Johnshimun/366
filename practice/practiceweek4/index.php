<?php
session_start();

$_SESSION["count"] = $_SESSION["count"] + 1;
echo  "Welcome  " .  $_POST["fistName"] . "  "  . 
$_POST["lastName"] ;


$_post[""]
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <form  action="confirmation.php"  method="post" >
      First Name: <input type=text name="firstName">
      Last Name: <input type=text name="lastName">
</form>

        <div>
            Count: <?php echo $_SESSION["count"]; ?>
        </div>
        
    </body>
</html>



<!--    session_start();-->
<!--    $_session["countcont"]++;-->


<!--// $-post ["name"]-->
<!--<checkbox name = "interst[]" value = "soccer">-->

<!--<form action "-->

<!--$username = $_post["un"];-->