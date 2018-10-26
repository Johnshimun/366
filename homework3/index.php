<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <form> 
            
            First Name <br> <input type="text" name="firstname" required ><br>;
            Last Name: <br>
            <input type="text" name="lastname" required ><br>
            User Password: <br>
             <input type="password" name="password" required ><br>
             <br>
             <?php echo "$value" ?>
             <input type="submit" name="submit" value="Submit Search">
            <input type="reset" name="reset" value="Reset">
            <button>Activate</button>
          
           
        </form>    
        
        
      
 <label for="favpet">What is your favorite pet?</label>
<select id="favpet" name="select">
<option value="1">Cat</option>
<option value="2">Dog</option>
<option value="3">Bird</option>
<option value="4">Reptile</option>
<option value="5">Turtle</option>
<option value="6">Hampster</option>
<option value="7">Mice</option>
<br>
<fieldset><br>
<div align = "right"> </div><legend>Select your your Computer Choice upgrades:</legend>
<br>
<input id="SSD" type="checkbox" name="computer" value="SSD">
<label for="SSD">256 SSD</label><br>
<input id="RAM" type="checkbox" name="computer" value="RAM">
<label for="RAM">16 GB RAM</label><br>
<input id="Grphcard" type="checkbox" name="computer" value="Grphcard">
<label for="Grphcard">NVidia Graphic card</label><br>
<input id="CPU" type="checkbox" name="computer" value="CPU">
<label for="CPU">Intel i7</label>
</fieldset> </div>
                <br /><br />
            </form>
            
             
             
            

    </body>
</html>