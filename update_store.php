<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Cập nhật cửa hàng</title>
</head>
<body style="margin:5%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cập nhật cửa hàng</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="update_store.php">
                        <fieldset>
						<?php
						if(!isset($_POST['update_store']))
						{
							include("database/db_conection.php");
							$id=$_GET['id'];
							$query="select * from store WHERE id=$id";
							$run=mysqli_query($dbcon,$query);
							while($row=mysqli_fetch_array($run))
							{
								$store_id=$row[0];
								$store_name=$row[1];
								$store_address=$row[2];
								$store_phone=$row[3];
								$store_visible=$row[4];
							?>
								<input class="form-control" name="id" type="hidden" value="<?php echo (isset($id))?$id:'';?>" >
								<div class="form-group">
									<input class="form-control" placeholder="Tên cửa hàng" name="name" type="text" value="<?php echo (isset($store_name))?$store_name:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Địa chỉ cửa hàng" name="address" type="text" value="<?php echo (isset($store_address))?$store_address:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Số điện thoại cửa hàng" name="phone" type="text" value="<?php echo (isset($store_phone))?$store_phone:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="<?php echo (isset($store_visible))?$store_visible:'';?>">
								</div>
								<input class="btn btn-lg btn-warning btn-block" type="submit" value="Cập nhật" name="update_store" >
							<?php }
							}
							?>
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
if(isset($_POST['update_store']))
{
	$store_id=$_POST['id'];
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
	$update_store="UPDATE store SET name ='$store_name',address ='$store_address',phone_number ='$store_phone',visible ='$store_visible' WHERE id =$store_id ";
    mysqli_query($dbcon,$update_store);
	header( "Location: store_management.php" );
}
?>