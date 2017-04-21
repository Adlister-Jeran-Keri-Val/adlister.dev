<?php

require_once __DIR__ . '/../../models/User.php';


if(!empty($_POST)) {
	$user = new User;
	$user->name = Input::get('name');
	$user->email = Input::get('email');
	$user->username = Input::get('username');
	$user->password = Input::get('password');
	if (Input::get('password') === Input::get('confirm_password')){
		$user->save();
		header( 'location: /account');
		die;
	}else{
		$errorMessage = 'Passwords do not match.';
	}

}

?>

<div class="container">
	<section id="login">
		<div class="row">
			<div id = "sign_up_border_box" class="col-xs-12 col-xs-offset-4">

				<h2 class="sign_up">SIGN UP</h2>
					<p class="sign_up_info">FILL OUT THE INFO BELOW
					   <br> TO CREATE AN ACCOUNT</p>
					<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
						<div class="alert alert-danger">
							<p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
						</div>
						<?php unset($_SESSION['ERROR_MESSAGE']); ?>
					<?php endif; ?>
					<?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
						<div class="alert alert-success">
							<p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
						</div>
						<?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
					<?php endif; ?>

					<form method="POST" action="" data-validation data-required-message="This field is required">

						<div class="form-group" id= "sign_up_group">
						FULL NAME<br>
							<input type="text" class="form-control" id="sign_up_name" name="name" data-required>
						</div>

						<div class="form-group" id= "email_sign_up_group">
						EMAIL<br>
							<input type="text" class="form-control" id="sign_up_email" name="email" data-required>
						</div>

						<div class="form-group" id= "sign_up_group">
						USERNAME<br>
							<input type="text" class="form-control" id="sign_up_username" name="username" data-required>
						</div>

						<div class="form-group" id= "sign_up_group">
						PASSWORD<br>
							<input type="password" class="form-control" id="sign_up_password" name="password" data-required>
						</div>
						<div class="form-group" id= "confirm_sign_up_group">
						CONFIRM PASSWORD<br>
							<input type="password" class="form-control" id="confirm_sign_up_password" name="confirm_password" data-required>
						</div>
						<?php if (isset($errorMessage)) : ?>
							<div class="alert alert-danger">
								<p class="error"><?= $errorMessage; ?></p>
							</div>
						<?php endif; ?>

						<div class="row">
							<!-- <div class="col-sm-6"> -->
							<br><br>
								<button type="submit" class="sign_up_button">SIGN UP</button>
							</div>
							<br>
							<div class="row">
							<!-- <div class="col-sm-6"> -->
								<button a href="/login" class="log_in_button"> GO TO LOG IN </button>
							</div>
							<br><br>
					</div>
					
				</form>

			</div>

		</div>

	</section>

</div>
