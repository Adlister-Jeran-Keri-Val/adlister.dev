<!--Page for an index of advertisements-->
<?php

require_once __DIR__ . '/../../database/db_connect.php';
require_once __DIR__ . '/../../models/Shoes.php';


if(Input::has('category')){
	$category = Input::get('category');
	$shoes = Shoe::findByCategory($category));
}else{
	$shoes = Shoe::all();
}

// if (isset($_REQUEST['search'])){
// 	$shoes = $shoe->searchItems($_REQUEST['search']);
// }else{


// }

?>
<body>
	<main class="container">
		<h2 id='welcomez'>Show all shoes</h2>
		<br>
		<div class = "box">
			<section class="parks">
				<div class="row">
				<?php foreach($shoes as $shoe): ?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<center id='shoe_box'>
							<a href = "/show?id=<?=$shoe->id ?>" class="shoe_title">
								<?= $shoe->title ?>
							</a>
							<p class="shoe_photo"><br><img src="<?= $shoe->image_location?>" height="225px" width="225px"></p><br>
							<p class="shoe_price">PRICE: $<?= $shoe->price ?></p>
							<p class="shoe_location">LOCATION: <?= $shoe->location ?></p>
							<p class="shoe_brand">BRAND: <?= $shoe->brand ?></p>
							<p class="shoe_size">SIZE: <?= $shoe->size ?></p><br><br>
						</center>
						<br><br>
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
	