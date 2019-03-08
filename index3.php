<?php 

include 'db.php';


$con = new db();

 if (isset($_POST ['submit'])) 
 {
    $name= $_POST ['name'];
    $model=$_POST ['model'];
    $price=$_POST ['price'];         
   
   $con->insert($name,$model,$price);
   echo "INSERTED";

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
