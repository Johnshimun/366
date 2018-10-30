<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <div>
            <a href="./homework/777/index.php">Lab 2</a>
            <a href="./homework/1assignment/index.php">assign1</a>
            <a href="./homework/Homework1/index.html">hmwk1</a>
            <a href="./homework/Slider/index.php">Carousel</a>
            <a href="./labs/smartcart/scart/index.php">scart</a>
            <a href="./meme_lab/meme.php">meme</a>
        </div>
 Random number: <?php
echo $_SESSION['RandomVal'] ?>
        <form method = "POST">
            <input type="text" name = "guess" value="Enter Guess"> </input>
            <input type="submit" name = "destroy" value="Start Over"> </input>
        </form>

    </body>
</html>