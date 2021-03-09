<?php
include("database/db_conection.php");
$delete_id=$_GET['id'];
$delete_query="delete from users WHERE id='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
header( "Location: user_management.php" );
?>