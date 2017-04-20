<!--Page for single advertisement -->

<?php
require_once __DIR__ . '/../../models/Shoes.php';

$shoe = Shoe::find($_GET['id']);

?>


<div class='shoe_box'>
	<h4><?= $shoe->title ?></h4>
	<img src="<?= $shoe->image_location?>" height="100px" width="100px">
	<p class="shoe_price">$<?= $shoe->price ?></p>
	<p class="shoe_location"><?= $shoe->location ?></p>
	<p class="shoe_brand"><?= $shoe->brand ?></p>
	<p class="shoe_size"=><?= $shoe->size ?></p>
</div>
<a href="/editshoe" class="log_in_button"> EDIT Listing </a>