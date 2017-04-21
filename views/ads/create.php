<!--Page for creating new advertisement li  stings-->


<!-- MAKE IT SO THAT AN INDIVIDUAL CAN ONLY VIEW THIS PAGE IF THEIR LOGGED IN OR ELSE REDIRECT TO LOGIN PAGE -->

<?php
require_once __DIR__ . '/../../models/Shoes.php';

if (!Auth::check()){
	header('location: /login');
	die;
}



if(!empty($_POST)) {
	$shoe = new Shoe;
	$shoe->title = Input::get('title');
	$shoe->price = Input::get('price');
	$shoe->msrp = Input::get('msrp');
	$shoe->color = Input::get('color');
	$shoe->style = Input::get('style');
	$shoe->category = Input::get('category');
	$shoe->size = Input::get('size');
	$shoe->location = Input::get('location');
	$shoe->brand = Input::get('brand');
	$shoe->shoe_condition = Input::get('shoe_condition');
	$shoe->contact_name = Input::get('contact_name');
	$shoe->contact_number = Input::get('contact_number');
	$shoe->item_description = Input::get('item_description');
	$shoe->user_id = Auth::id();
	$shoe->save();
	header('location: /browse');
	die;
}

?>

<h2> CREATE A LISTING</h2>



<main class="row">
	<section id="create_border_box" class="col-xs-12 col-xs-offset-4">

		<form class="form-horizontal" method="POST" action="/create">
		<br><br>
	      	<?php if(empty($errors['title'])): ?>
				<div class="form-group">
	    			<label for="name" class="col-xs-4 control-label">LISTING TITLE</label>
	    			<div class="col-xs-4">
	      				<input type="text" name="title" class="form-control" id="name" placeholder=>
			      	</div>
			  	</div>
	      	<?php else: ?>
	      		<div class="form-group has-error">
	    			<label for="name" class="col-xs-4 control-label">LISTING TITLE </label>
	    			<div class="col-xs-4">
	      				<input type="text" name="title" class="has-error form-control" id="name" placeholder="<?= $errors['title'] ?>">
			      	</div>
			  	</div>	
	      	<?php endif; ?>
			
			<?php if(empty($errors['price'])): ?>
				<div class="form-group">
		    		<label for="location" class="col-xs-4 control-label">PRICE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="price" class="form-control" id="price" placeholder="$0.00">
		    		</div>
		  		</div>
		  	<?php else: ?>
		  		<div class="form-group has-error">
		    		<label for="location" class="col-xs-4 control-label">PRICE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="price" class="form-control" id="price" placeholder="<?= $errors['price'] ?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>
	  		
	  		<?php if(empty($errors['msrp'])): ?>
				<div class="form-group">
		    		<label for="msrp" class="col-xs-4 control-label">MSRP</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="msrp" class="form-control" id="msrp" placeholder="$0.00">
		    		</div>
		  		</div>
		  	<?php else: ?>
		  		<div class="form-group has-error">
		    		<label for="msrp" class="col-xs-4 control-label">MSRP</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="msrp" class="form-control" id="msrp" placeholder="<?= $errors['msrp'] ?>">
		    		</div>
		  		</div>
		  	<?php endif; ?>

		  	<?php if(empty($errors['color'])): ?>
		  		<div class="form-group">
		    		<label for="color" class="col-xs-4 control-label">COLOR</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="color" class="form-control" id="color" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="color" class="col-xs-4 control-label">COLOR</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="color" class="form-control" id="color" placeholder="<?= $errors['color']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['style'])): ?>
		  		<div class="form-group">
		    		<label for="style" class="col-xs-4 control-label">STYLE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="style" class="form-control" id="style" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="style" class="col-xs-4 control-label">STYLE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="style" class="form-control" id="style" placeholder="<?= $errors['style']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['category'])): ?>
		  		<div class="form-group">
		    		<label for="category" class="col-xs-4 control-label">CATEGORY</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="category" class="form-control" id="category" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="category" class="col-xs-4 control-label">CATEGORY</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="category" class="form-control" id="category" placeholder="<?= $errors['category']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['size'])): ?>
		  		<div class="form-group">
		    		<label for="size" class="col-xs-4 control-label">SIZE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="size" class="form-control" id="size" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="size" class="col-xs-4 control-label">SIZE</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="size" class="form-control" id="size" placeholder="<?= $errors['size']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>
	  	
	  		<?php if(empty($errors['brand'])): ?>
		  		<div class="form-group">
		    		<label for="brand" class="col-xs-4 control-label">BRAND</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="brand" class="form-control" id="brand" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="brand" class="col-xs-4 control-label">BRAND</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="brand" class="form-control" id="brand" placeholder="<?= $errors['brand']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['condition'])): ?>
		  		<div class="form-group">
		    		<label for="condition" class="col-xs-4 control-label">CONDITION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="shoe_condition" class="form-control" id="condition" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="condition" class="col-xs-4 control-label">CONDITION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="shoe_condition" class="form-control" id="condition" placeholder="<?= $errors['condition']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  			<?php if(empty($errors['item_description'])): ?>
		  		<div class="form-group">
		    		<label for="item_description" class="col-xs-4 control-label">ITEM DESCRIPTION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="item_description" class="form-control" id="item_description" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="item_description" class="col-xs-4 control-label">ITEM DESCRIPTION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="item_description" class="form-control" id="item_description" placeholder="<?= $errors['item_description']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  			<?php if(empty($errors['location'])): ?>
		  		<div class="form-group">
		    		<label for="location" class="col-xs-4 control-label">LOCATION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="location" class="form-control" id="location" placeholder="">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="location" class="col-xs-4 control-label">LOCATION</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="location" class="form-control" id="location" placeholder="<?= $errors['location']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['contact_name'])): ?>
				<div class="form-group">
	    			<label for="contact_name" class="col-xs-4 control-label">CONTACT NAME</label>
	    			<div class="col-xs-4">
	      				<input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="contact_name">
	    			</div>
	  			</div>
	  		<?php else: ?>

	  			<div class="form-group has-error">
	    			<label for="contact_name" class="col-xs-4 control-label">CONTACTN NAME</label>
	    			<div class="col-xs-4">
	      				<input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="<?= $errors['contact_name'] ?>">
	    			</div>
	  			</div>
	  		<?php endif; ?>

	  		<?php if(empty($errors['contact_number'])): ?>
		  		<div class="form-group">
		    		<label for="contact_number" class="col-xs-4 control-label">CONTACT NUMBER</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="000-000-0000">
		    		</div>
		  		</div>
		  	<?php else: ?>
				<div class="form-group has-error">
		    		<label for="contact_number" class="col-xs-4 control-label">CONTACT NUMBER</label>
		    		<div class="col-xs-4">
		      			<input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="<?= $errors['contact_number']?>">
		    		</div>
		  		</div>
	  		<?php endif; ?>
	  	<button type="submit" class="create_listing_button">CREATE LISTING</button>
		</form>
	</section>
</main>
		
		<!-- Your custom JS goes here -->
		<script type="text/javascript"></script>