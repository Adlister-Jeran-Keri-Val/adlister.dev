<!--Page for user account home-->
<?php
require_once __DIR__ . '/../../models/Shoes.php';

if (!Auth::check()){
	header('location: /login');
	die;
}
?>


<h3> Welcome</h3>
