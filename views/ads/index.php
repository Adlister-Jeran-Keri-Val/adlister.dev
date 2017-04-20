<!--Page for an index of advertisements-->
<?php

require_once __DIR__ . '/../../database/db_connect.php';
require_once __DIR__ . '/../../models/Shoes.php';

$shoes = Shoe::all();

?>
<body>
	<main class="container">
		<h2 id='welcomez'>Show all shoes</h2>
		<div class = "box">
			<section class="parks">
				<div class="row">
				<?php foreach($shoes as $shoe): ?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<center id='shoe_box'>
							<a href = "/show?id=<?=$shoe->id ?>" class="shoe_title">
								<?= $shoe->title ?>
							</a>
							<p class="shoe_photo"><img src="<?= $shoe->image_location?>" height="150px" width="150px"></p>
							<p class="shoe_price">$<?= $shoe->price ?></p>
							<p class="shoe_location"><?= $shoe->location ?></p>
							<p class="shoe_brand"><?= $shoe->brand ?></p>
							<p class="shoe_size">Size <?= $shoe->size ?></p>
						</center>
						<br>
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
	