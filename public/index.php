<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>ShoeLaLa</title>
    <?php require '../views/partials/head.php'; ?>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine:300|Yanone+Kaffeesatz:200|Satisfy" rel="stylesheet">
</head>
<body>
<h1></h1>
    <?php require '../views/partials/navbar.php'; ?>
    <?php require $mainView; ?>
    <?php require '../views/partials/common_js.php'; ?>
    <?php require '../views/partials/footer.php' ; ?>
</body>
</html>