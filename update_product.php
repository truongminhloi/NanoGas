<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Cập nhật sản phẩm</title>
</head>
<body style="margin:5%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cập nhật sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="update_product.php">
                        <fieldset>
						<?php
						if(!isset($_POST['update_product']))
						{
							include("database/db_conection.php");
							$id=$_GET['id'];
							$query="select * from product WHERE id=$id";
							$run=mysqli_query($dbcon,$query);
							while($row=mysqli_fetch_array($run))
							{
								$product_id=$row[0];
								$product_name=$row[1];
								$product_color=$row[2];
								$product_material=$row[3];
								$product_weight=$row[4];
								$product_price=$row[5];
								$product_visible=$row[6];
								$product_image=$row[7];
							?>
								<input class="form-control" name="id" type="hidden" value="<?php echo (isset($id))?$id:'';?>" >
								<div class="form-group">
									<input class="form-control" placeholder="Tên sản phẩm" name="name" type="text" value="<?php echo (isset($product_name))?$product_name:'';?>" >
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Màu sản phẩm" name="color" type="text" value="<?php echo (isset($product_color))?$product_color:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Loại vật liệu" name="material" type="text" value="<?php echo (isset($product_material))?$product_material:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Cân nặng" name="weight" type="text" value="<?php echo (isset($product_weight))?$product_weight:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Giá" name="price" type="text" value="<?php echo (isset($product_price))?$product_price:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Đường dẫn hình ảnh" name="image" type="text" value="<?php echo (isset($product_image))?$product_image:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="<?php echo (isset($product_visible))?$product_visible:'';?>">
								</div>
								<input class="btn btn-lg btn-warning btn-block" type="submit" value="Cập nhật" name="update_product" >
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
if(isset($_POST['update_product']))
{
	$product_id=$_POST['id'];
    $product_name=$_POST['name'];
    $product_color=$_POST['color'];
    $product_material=$_POST['material'];
    $product_weight=$_POST['weight'];
    $product_price=$_POST['price'];
    $product_visible=$_POST['visible'];
    $product_image=$_POST['image'];
    if($product_id=='')
    {
        echo"<script>alert('Không thể cập nhật sản phẩm')</script>";
		exit();
    }
    if($product_name=='')
    {
        echo"<script>alert('Vui lòng điền tên sản phẩm')</script>";
		exit();
    }

    if($product_color=='')
    {
        echo"<script>alert('Vui lòng điền màu sản phẩm')</script>";
		exit();
    }

    if($product_material=='')
    {
        echo"<script>alert('Vui lòng điền loại vật liệu')</script>";
		exit();
    }
	if($product_weight=='')
    {
        echo"<script>alert('Vui lòng điền cân nặng sản phẩm')</script>";
		exit();
    }

    if($product_price=='')
    {
        echo"<script>alert('Vui lòng điền giá sản phẩm')</script>";
		exit();
    }

    if($product_visible=='')
    {
        echo"<script>alert('Vui lòng điền trạng thái')</script>";
		exit();
    }
	$update_product="UPDATE product SET name ='$product_name',color ='$product_color',material ='$product_material',weight ='$product_weight',price ='$product_price',visible ='$product_visible',image ='$product_image' WHERE id =$product_id ";
	mysqli_query($dbcon,$update_product);
	header( "Location: product_management.php" );
}
?>