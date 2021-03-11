
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Đăng ký sản phẩm</title>
</head>
<body style="margin:5%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="add_product.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Tên sản phẩm" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Màu sản phẩm" name="color" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Loại vật liệu" name="material" type="text" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Cân nặng" name="weight" type="text" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Giá" name="price" type="text" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control"  placeholder="Đường dẫn hình ảnh" name="image" type="text" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng ký" name="add_product" >
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
if(isset($_POST['add_product']))
{
    $product_name=$_POST['name'];
    $product_color=$_POST['color'];
    $product_material=$_POST['material'];
    $product_weight=$_POST['weight'];
    $product_price=$_POST['price'];
    $product_visible=$_POST['visible'];
    $product_image=$_POST['image'];

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
    $insert_product="insert into product (name,color,material,weight,price,visible,image) VALUE ('$product_name','$product_color','$product_material','$product_weight','$product_price','$product_visible','$product_image')";
    mysqli_query($dbcon,$insert_product);
	header( "Location: product_management.php" );
}
?>