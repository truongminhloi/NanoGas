
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Đăng ký cửa hàng</title>
</head>
<body style="margin:5%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký cửa hàng</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="add_store.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Tên cửa hàng" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Địa chỉ cửa hàng" name="address" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Số điện thoại cửa hàng" name="phone" type="text" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng ký" name="add_store" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['add_store']))
{
    $store_name=$_POST['name'];
    $store_address=$_POST['address'];
    $store_phone=$_POST['phone'];
    $store_visible=$_POST['visible'];


    if($store_name=='')
    {
        echo"<script>alert('Vui lòng điền tên cửa hàng')</script>";
		exit();
    }

    if($store_address=='')
    {
        echo"<script>alert('Vui lòng điền địa chỉ cửa hàng')</script>";
		exit();
    }
    if($store_phone=='')
    {
        echo"<script>alert('Vui lòng điền số điện thoại cửa hàng')</script>";
		exit();
    }
	
    if($store_visible=='')
    {
        echo"<script>alert('Vui lòng điền trạng thái')</script>";
		exit();
    }
    $insert_store="insert into store (name,address,phone_number,visible) VALUE ('$store_name','$store_address','$store_phone','$store_visible')";
    mysqli_query($dbcon,$insert_store);
	header( "Location: store_management.php" );
}
?>