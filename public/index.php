<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>ShoeLaLa</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine|Yanone+Kaffeesatz:200|Satisfy" rel="stylesheet">
</head>
<body>
<h1></h1>
    <?php require '../views/partials/navbar.php'; ?>
    <?php require '../views/partials/head.php'; ?>
    <?php require $mainView; ?>
    <?php require '../views/partials/common_js.php'; ?>
    <?php require '../views/partials/footer.php' ; ?>
</body>
</html>