
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Đăng ký quà tặng</title>
</head>
<body style="margin:5%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký quà tặng</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="add_gift.php">
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
                                <input class="form-control" placeholder="Trạng thái" name="visible" type="text" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng ký" name="add_gift" >
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
if(isset($_POST['add_gift']))
{
    $gift_name=$_POST['name'];
    $gift_color=$_POST['color'];
    $gift_material=$_POST['material'];
    $gift_weight=$_POST['weight'];
    $gift_price=$_POST['price'];
    $gift_visible=$_POST['visible'];


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
    $insert_gift="insert into gift (name,color,material,weight,price,visible) VALUE ('$gift_name','$gift_color','$gift_material','$gift_weight','$gift_price','$gift_visible')";
    mysqli_query($dbcon,$insert_gift);
	header( "Location: gift_management.php" );
}
?>