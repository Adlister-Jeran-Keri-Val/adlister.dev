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
		<h2 id='welcomez'>Show all shoes</h2>
		<div class = "box">
			
			<section class="parks">
				<?php foreach($shoes as $shoe): ?>
					
<!--  YO GIRL DIS MY OG STUFF I JUST COMMENTED IT OUT JUST IN CASE U CAN DELETE IT IF YOU GET ERRYTHING TO WERK -->
<!-- 						<div class='shoe_box'>
							<a href = "/show?id=<?=$shoe->id ?>"><?= $shoe->title ?></a>
							<img src="<?= $shoe->image_location?>" height="100px" width="100px">
							<p>$<?= $shoe->price ?></p>
							<p><?= $shoe->location ?></p>
							<p><?= $shoe->brand ?></p>
							<p><?= $shoe->size ?></p>
						
						</div>
		
				</div>
 -->
<!-- USE BOOTSTRAP TO CREATE THE COLUMNS FOR THIS! 3 COLUMNS PER ROW! -->
					<div class='shoe_box'>
						<a href class="shoe_title"><?= $shoe->title ?></a>
						<p class="shoe_photo"><img src="<?= $shoe->image_location?>" height="250px" width="250px"></p>
						<p class="shoe_price">$<?= $shoe->price ?></p>
						<p class="shoe_location"><?= $shoe->location ?></p>
						<p class="shoe_brand"><?= $shoe->brand ?></p>
						<p class="shoe_size"><?= $shoe->size ?></p>
					</tr>
					</div>
				<?php endforeach; ?>	
			</div>

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
	