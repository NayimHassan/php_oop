 <?php

class db{

	public $conn;

	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ctg180oop","root","");
		$this->conn = $pdo;
	}

	public function insert ($name,$model,$price)
	{
		$insert_query = "INSERT INTO mobile (name,model,price) VALUES (:name,:model,:price)";
		  $statement = $this->conn->prepare($insert_query);
		  $statement->execute(
		    array(
		      ":name" => $name,
		      ":model" => $model,
		      ":price" => $price,
		    )
		  );
	}
}


?>