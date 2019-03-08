<?php 

$pdo = new PDO("mysql:host=localhost;dbname=ctg180oop","root","");

//if ($pdo){
	//echo "connected";
//}

 if (isset($_POST ['submit']) ) {
 	echo "passed";
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
    <form action="" method="POST">
    	<label>Name</label>
        <input type="text" name="name"> <br>
         
         <label>Model</label>
         <input type="text" name="model"><br>

         <label>price</label>
         <input type="number" name="price"><br>

         <input type="submit" name="submit"  value="Add mobile">
    </form>



 </body>
 </html>