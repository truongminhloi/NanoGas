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
                    <form role="form" method="post" action="update_gift.php">
                        <fieldset>
						<?php
						if(!isset($_POST['update_gift']))
						{
							include("database/db_conection.php");
							$id=$_GET['id'];
							$query="select * from gift WHERE id=$id";
							$run=mysqli_query($dbcon,$query);
							while($row=mysqli_fetch_array($run))
							{
								$gift_id=$row[0];
								$gift_name=$row[1];
								$gift_color=$row[2];
								$gift_material=$row[3];
								$gift_weight=$row[4];
								$gift_price=$row[5];
								$gift_image=$row[6];
								$gift_category_id=$row[7];
								$gift_visible=$row[8];
							?>
								<input class="form-control" name="id" type="hidden" value="<?php echo (isset($id))?$id:'';?>" >
								<div class="form-group">
									<input class="form-control" placeholder="Tên sản phẩm" name="name" type="text" value="<?php echo (isset($gift_name))?$gift_name:'';?>" >
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Màu sản phẩm" name="color" type="text" value="<?php echo (isset($gift_color))?$gift_color:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Loại vật liệu" name="material" type="text" value="<?php echo (isset($gift_material))?$gift_material:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Cân nặng" name="weight" type="text" value="<?php echo (isset($gift_weight))?$gift_weight:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Giá" name="price" type="text" value="<?php echo (isset($gift_price))?$gift_price:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Đường dẫn hình ảnh" name="visible" type="text" value="<?php echo (isset($gift_image))?$gift_image:'';?>">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="<?php echo (isset($gift_visible))?$gift_visible:'';?>">
								</div>
								<input class="btn btn-lg btn-warning btn-block" type="submit" value="Cập nhật" name="update_gift" >
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
if(isset($_POST['update_gift']))
{
    $gift_name=$_POST['name'];
    $gift_color=$_POST['color'];
    $gift_material=$_POST['material'];
    $gift_weight=$_POST['weight'];
    $gift_price=$_POST['price'];
    $gift_visible=$_POST['visible'];
    $gift_image=$_POST['image'];
	
    if($gift_name=='')
    {
        echo"<script>alert('Vui lòng điền tên sản phẩm')</script>";
		exit();
    }

    if($gift_color=='')
    {
        echo"<script>alert('Vui lòng điền màu sản phẩm')</script>";
		exit();
    }

    if($gift_material=='')
    {
        echo"<script>alert('Vui lòng điền loại vật liệu')</script>";
		exit();
    }
	if($gift_weight=='')
    {
        echo"<script>alert('Vui lòng điền cân nặng sản phẩm')</script>";
		exit();
    }

    if($gift_price=='')
    {
        echo"<script>alert('Vui lòng điền giá sản phẩm')</script>";
		exit();
    }

    if($gift_visible=='')
    {
        echo"<script>alert('Vui lòng điền trạng thái)</script>";
		exit();
    }
	$update_gift="UPDATE gift SET name ='$gift_name',color ='$gift_color',material ='$gift_material',weight ='$gift_weight',price ='$gift_price',visible ='$gift_visible',image ='$gift_image' WHERE id =$gift_id ";
	mysqli_query($dbcon,$update_gift);
	header( "Location: gift_management.php" );
}
?>