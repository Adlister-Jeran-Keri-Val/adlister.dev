<!--Page for an index of advertisements-->
<?php

require_once __DIR__ . '/../../database/db_connect.php';
require_once __DIR__ . '/../../models/Shoes.php';

$shoes = Shoe::all();


?>
<!DOCTYPE html>
	<html lang="en-us">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="">
		<meta name="Keywords" content="">
	    <meta name="author" content="">
		<title></title>

	</head>
	<body>
		<main class="container">
		<h1> ShoeLaLa</h1>
		<h2 id='welcomez'>Show all shoes</h2>
		<div class = "box">
			

			<section class="parks">
				<table class="table tablz">
					<tr>
						<th>Title: </th>
						<th>Price: </th>
						<th>Location: </th>
						<th>Brand: </th>
						<th>Size: </th>
					</tr>
					<?php foreach($shoes as $shoe): ?>
						<tr>

							<td><?= $shoe->title ?></td>
							<img src="<?= $shoe->image_location?>">
							<td><?= $shoe->price ?></td>
							<td><?= $shoe->location ?></td>
							<td><?= $shoe->brand ?></td>
							<td><?= $shoe->size ?></td>
						</tr>
					<?php endforeach; ?>	
				</table>

			</section>
			</div>
		</main>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
		<!-- Your custom JS goes here -->
		<script type="text/javascript"></script>
	</body>
	</html>
	