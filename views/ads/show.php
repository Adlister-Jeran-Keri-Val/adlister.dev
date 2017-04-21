<!--Page for single advertisement -->

<?php
require_once __DIR__ . '/../../models/Shoes.php';

$shoe = Shoe::find($_GET['id']);

?>


<div class='shoe_box'>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-1" id="left_side">
		<h2 class="shoe_title"><?= $shoe->title ?></h2>
		<img src="<?= $shoe->image_location?>" height="350px" width="350px">
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="middle">
		<p class="show_shoe_price"><u>ASKING:</u> $<?= $shoe->price ?></p>
		<p class="show_shoe_msrp"><u>MSRP:</u> $<?= $shoe->msrp ?></p>
		<p class="show_shoe_color"><u>COLOR:</u> <?= $shoe->color ?></p>
		<p class="show_shoe_brand"><u>BRAND:</u> <?= $shoe->brand ?></p>
		<p class="show_shoe_size"=><u>SIZE:</u> <?= $shoe->size ?></p>
		<p class="show_shoe_condition"><u>CONDITION:</u> <?= $shoe->shoe_condition ?></p>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="right_side">
		<p class="show_shoe_contact_name"><u>CONTACT NAME:</u> <?= $shoe->contact_name ?></p>
		<p class="show_shoe_contact_info"><u>CONTACT INFO:</u> <?= $shoe->contact_number?></p>
		<p class="show_shoe_location"=><u>LOCATED:</u> <?= $shoe->location ?></p>
		<p class="show_shoe_description"><u>DESCRIPTION:</u> <br> <?= $shoe->item_description ?></p>
		<a href="/editshoe" class="log_in_button"> CLICK HERE TO EDIT YOUR LISTING </a>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>