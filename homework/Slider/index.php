<?php
$backgroundImage = "img/sea.jpg";

// API call goes here

if (isset($_GET['keyword']))
	{
	include 'api/pixabayAPI.php';

	$imageURLs = getImageURLs($_GET['keyword'], $_GET['layout']);

	// print_r($imageURLs);

	$backgroundImageURLs = getImageURLs($_GET['category'], $_GET['layout']);
	$backgroundImage = $backgroundImageURLs[array_rand($backgroundImageURLs) ];
	echo "Your searched for: " . $_GET['keyword'];
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url("css/styles.css");
            body {
                background-image: url('<?php echo $backgroundImage?>');
            }
        </style>
    </head>
    <body>
        <form>
            <input type="text" name="keyword" placeholder="Keyword" value = ""/> 
            <!--<input type="submit" value="Submit"/> <=?_GET['keyword']?>--> 
           
            <div>
                <input type="radio" id="lhorizontal" name="layout" value="horizontal" >
                <label for="lhorizontal"> Horizontal </label>
                 <input type="radio" id="lvertical" name="layout" value="vertical" checked/>
                 <label for="lvertical"> Vertical </label>
            </div>
            <br />
            <select name="category" style="color:grey; font-size:2em">
                 <option value=""> Select One </option>
                 <option value="Ocean"> Sea </option>
                 <option value="Mountains"> Mountains </option>
                 <option value="forest"> Forest </option>
                 <option value="Sky"> Sky </option>
            </select>
            <input type="submit" value="Submit" />
        </form>
        <br/>
       
        <?php

if (!isset($imageURLs))
	{
	echo "<a class = ex2 <h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com </h2> </a>";
	}
  else
	{
?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
	for ($i = 0; $i < 5; $i++)
		{
		echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
		echo ($i == 0) ? " class='active'" : "";
		echo "></li>";
		}

?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
	for ($i = 0; $i < 5; $i++)
		{
		do
			{
			$randomIndex = rand(0, count($imageURLs));
			}

		while (!isset($imageURLs[$randomIndex]));
		echo '<div class="item ';
		echo ($i == 0) ? "active" : "";
		echo '">';
		echo "<img src='" . $imageURLs[$randomIndex] . "' width='200' >";
		echo '</div>';
		unset($imageURLs[$randomIndex]);
		}

?>
                
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            
            <?php
	}

?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>