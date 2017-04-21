<!--Page for single advertisement -->

<?php
require_once __DIR__ . '/../../models/Shoes.php';

$shoe = Shoe::find($_GET['id']);

?>


<div class='shoe_box'>
	<h2 class="shoe_title"><?= $shoe->title ?></h2>
	<center><img src="<?= $shoe->image_location?>" height="350px" width="350px"></center>
	<p class="show_shoe_price">ASKING: $<?= $shoe->price ?></p>
	<p class="show_shoe_location">MSRP: <?= $shoe->msrp ?></p>
	<p class="show_shoe_location">COLOR: <?= $shoe->color ?></p>
	<p class="show_shoe_brand">BRAND: <?= $shoe->brand ?></p>
	<p class="show_shoe_size"=>SIZE: <?= $shoe->size ?></p>
	<p class="show_shoe_location">CONDITION: <?= $shoe->shoe_condition ?></p>
	<p class="show_shoe_brand">CONTACT NAME: <?= $shoe->contact_name ?></p>
	<p class="show_shoe_location">CONTACT INFO: <?= $shoe->contact_number?></p>
	<p class="show_shoe_size"=>LOCATED: <?= $shoe->location ?></p>
	<p class="show_shoe_location">DESCRIPTION: <br> <?= $shoe->item_description ?></p>
</div>
<a href="/editshoe" class="log_in_button"> CLICK HERE TO EDIT YOUR LISTING </a>