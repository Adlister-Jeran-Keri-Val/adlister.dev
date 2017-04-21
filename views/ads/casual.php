<?php
$shoes = Shoe::findC('casual');
?>
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
