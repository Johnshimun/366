

<!DOCTYPE html>
<html>
  <head>
    <title>Quotes</title>
  </head>
  <body>
    <h1>Enter Quote</h1>

    <div id="demobox">
    <form method="post" action="midterm.php">
        quote: <input type="text" name="quote"></input> <br/>
        author: <input type="text" name="author"></input> <br/>
        
         <input type="submit"></input>
         </div>
    </form>
    
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["quote"])) {
    $quote = "quote is required";
  } else {
    $quote = test_input($_POST["quote"]);
  }

  if (empty($_POST["author"])) {
    $author = "Author is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}
?>


</html>