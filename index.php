<?php


require_once "app/Cars.php";
require_once "db/Db.php";


$product = new Cars(DB::selectAllsqli());

?>

<h1>Garage</h1>
<a href="pages/addNewCar.php">Add New Car</a>
<div style="display: flex"> 
  <?php $product->render(); ?>
</div> 