<?php

include("database/db_conection.php");
if(isset($_POST['feedback']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    if($name=='')
    {
        echo"<script>alert('Vui lòng nhập tên')</script>";
		exit();
    }

    if($email=='')
    {
        echo"<script>alert('Vui lòng nhập email')</script>";
		exit();
    }

    if($message=='')
    {
        echo"<script>alert('Vui lòng nhập thông điệp')</script>";
		exit();
    }

    $insert_feedback="insert into feedback (name,email,message) VALUE ('$name','$email','$message')";
    mysqli_query($dbcon,$insert_feedback);
	header( "Location: index.php#contact" );
}
?>