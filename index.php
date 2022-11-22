<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">
	
	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="style.css"> 
	<title>Coding Center</title>
</head>
<body>

	<h2>Menampilkan Data Dinamis Dalam Tabel HTML</h2>

	<table>
	
		<!-- The tables header -->
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Price</th>
			
		</tr>

		<!-- The html template we will use in our loop -->
		<?php 
		$json_data = file_get_contents("cars.json");
		$carss = json_decode($json_data, true);
		if(count($carss) != 0){
			foreach($carss as $cars){
				?>
						<tr>
						<td> <?php echo $cars['Id'] ?> </td>
						<td> <?php echo $cars['Name'] ?> </td>
						<td> <?php echo $cars['Price'] ?> </td>
						
					</tr>
				<?php
			}
		}
		
		
		?>
		
	</table>
</body>
</html>