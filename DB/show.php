  <?php 
include 'db2.php';
$sh = new db();

$result = $sh->show();
// var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Mobiles</title>
</head>
<body>

	<table border="1px solid black">
  
		<tr>
			<th>Name</th>
			<th>Model</th>
			<th>Price</th>
		</tr>
		<?php
		// foreach($variable as $key=>$value)
			foreach($result as $value) {
				
		?>
		<tr>
			<td><?php echo $value['Name']; ?></td>
			<td><?php echo $value['Model']; ?></td>
			<td><?php echo $value['Price']; ?></td>
		</tr>
		<?php 
			}
		?>
		
	</table>

</body>
</html>