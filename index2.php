<?php 


$pdo=new PDO("mysql:host=localhost;dbname=ctg180oop","root","");

//if ($pdo){
	//echo "connected";
//}

 if (isset($_POST ['submit']) ) {
 	//echo "passed";
    $name= $_POST ['name'];
    $model=$_POST ['model'];
    $price=$_POST ['price'];

   $insert_query="INSERT INTO mobile (name,model,price) VALUES(:name,:model,:price)";

   $statement=$pdo->prepare ($insert_query);
   $statement-> execute(
              array(
                   ":name"=>$name,
                   ":model"=>$model,
                   ":price"=>$price,
              )
            
   );
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


