<?php 

require_once "../db/Db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$model = $_POST['model'];
$horsePower = $_POST['horsepower'];
$engine = $_POST['engine'];

$edit = new DB($id, $name, $model, $horsePower, $engine);

$edit->editSqli();

?> 
<a href="/">switch to home</a>