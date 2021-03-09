<?php
include("database/db_conection.php");
$delete_id=$_GET['id'];
$delete_query="delete from product WHERE id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
header( "Location: product_management.php" );
?>