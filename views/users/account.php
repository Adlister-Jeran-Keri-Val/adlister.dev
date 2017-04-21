<!--Page for user account home-->
<?php
require_once __DIR__ . '/../../models/Shoes.php';
require_once __DIR__ . '/../../models/User.php';

if (!Auth::check()){
	header('location: /login');
	die;
}

$user = User::findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);


// Shoe::findUserListings('4');


?>


<h2> Welcome <?=  $user->name ?></h2>

<h2> Your Listings: </h2> 
<!-- <?= $shoe->id?>
 -->

