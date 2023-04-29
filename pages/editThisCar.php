<h2>Edit This Car</h2>
<?php 
    $id = $_GET['id'];
?>

<form action="editThisCarSqli.php" method="POST">
    <input type="text" name='id' value=<?= $id ?> style='display:none'>
    <p>Name Auto</p>
    <input type="text" name='name'>
    <p>Model</p>
    <input type="text" name='model'>
    <p>Horsepower</p>
    <input type="text" name='horsepower'>
    <p>Engine</p>
    <input type="text" name='engine'><br><br>
    <button type='submit'>Update</button>
</form>