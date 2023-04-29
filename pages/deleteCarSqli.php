<?php 

require_once "../db/Db.php";

$id = $_GET['id'];

$delete = new DB($id, NULL,NULL,NULL,NULL);

$delete->deleteSqli();
?>

<a href="/">switch to home</a>