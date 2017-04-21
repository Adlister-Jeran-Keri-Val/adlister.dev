<?php
// require "../../utils/Auth.php";

Auth::logout();
header('location: /exit');
die;
?>
