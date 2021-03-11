<?php
include("database/db_conection.php");
$delete_id=$_GET['id'];
$delete_query="delete from feedback WHERE id='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
header( "Location: feedback_management.php" );
?>