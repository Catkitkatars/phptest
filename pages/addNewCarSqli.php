<?php

require_once "../db/Db.php";

$name = $_POST['name'];
$model = $_POST['model'];
$horsepower = $_POST['horsepower'];
$engine = $_POST['engine'];

$addNew = new DB(NULL, $name, $model, $horsepower, $engine);

$addNew->addSqli();

?>

<a href="/">switch to home</a>