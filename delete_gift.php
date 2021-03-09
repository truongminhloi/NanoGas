<?php
include("database/db_conection.php");
$delete_id=$_GET['id'];
$delete_query="delete from gift WHERE id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
header( "Location: gift_management.php" );
?>