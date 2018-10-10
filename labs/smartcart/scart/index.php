<?php
include 'functions.php';
   
session_start();
if(!isset($_SESSION['cart'])){
   $_SESSION['cart'] = array();
}
if(isset($_POST['itemName'])){
   $newItem = array();
   $newItem['name'] = $_POST['itemName'];
   $newItem['id'] = $_POST['itemId'];
   $newItem['price'] = $_POST['itemPrice'];
   $newItem['image'] = $_POST['itemImage'];
   
   foreach($_SESSION['cart'] as &$item){
       if ($newItem['id'] ==  $item['id']){
           $item['quantity'] += 1;
           $found = true;
       }
   }
   
   if($found != true){
       $newItem['quantity'] = 1;
       array_push($_SESSION['cart'], $newItem);
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Products Page</title>
    </head>
    <body>
    <div class='container'>
        <div class='text-center'>
            
            <nav class='navbar navbar-default - navbar-fixed-top'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <a class='navbar-brand' href='#'>Shop Smart S-mart</a>
                    </div>
                    <ul class='nav navbar-nav'>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='scart.php'>
                        <span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'>   
                        </span> Cart: <?php displayCartCount(); ?> </a></li>
                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />
            
            <form enctype="text/plain">
                <div class="form-group">
                    <label for="pName">Product Name</label>
                    <input type="text" class="form-control" name="query" id="pName" placeholder="Name">
                    <!--<select name="category">-->
                    
                    </select>
                    <br/>
                    Price:  
                    From: <input type="text" name="pfrom" />
                    To: <input type="text" name="pto" />
                    <br/>
                    Ordering by: 
                    <input type="radio" name="ordering" value="price"> Price
                    <input type="radio" name="ordering" value="product"> Product 
                    
                    <br/>
                    <input name="show-images" type="checkbox"> Click to show images
                </div>
                <input type="submit" name="search-submitted" value="Submit" class="btn btn-default">
                <br /><br />
            </form>
            
            <?php
            $category = '';
            $query = '';
            $ordering = '';
            $pFrom = '';
            $pTo = '';
            
         
            
              //https://stackoverflow.com/questions/29666054/how-do-i-use-get-to-check-whether-the-value-of-the-sub-category-is-in-a-catego
            
            if (isset($_GET["category"]) && !empty($_GET["category"])) {
                    $category = $_GET["category"]; 
            }
            if (isset($_GET["pfrom"]) && !empty($_GET["pfrom"])) {
                $pFrom =  $_GET["pfrom"]; 
            }
            if (isset($_GET["pto"]) && !empty($_GET["pto"])) {
                $pTo = $_GET["pto"];
            }
            if (isset($_GET["ordering"]) && !empty($_GET["ordering"])) {
                $ordering = $_GET["ordering"];
            }
            if (isset($_GET["show-images"]) && !empty($_GET["show-images"])) {
                $showImages = true;
            }
            if(isset($_GET['query'])) {
               $query = $_GET['query'];
            }
        
            
            displayResults();
            ?>
        </div>
    </div>
    </body>
</html>