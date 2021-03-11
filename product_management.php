<html>
	<head lang="en">
		<meta charset="UTF-8"/>
		<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Danh sách sản phẩm</title>
	</head>
	<body>
		<section id="user" class="parallax-section">
			<div class="container">
				<h1 align="center">Danh sách sản phẩm</h1>
				<div class="d-block">
					<a type="button" href="index.php" class="btn btn-primary mr-5"><i class="fa fa-undo"></i> Trang chủ</a>
					<a type="button" href="admin.php" class="btn btn-primary"><i class="fa fa-undo"></i> Trang Admin</a>
					<a type="button" href="add_product.php" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
				</div>
				<div class="d-block" style="margin-top:5%;">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">ID</th>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col" class="text-center">Màu</th>
								<th scope="col" class="text-center">Chất liệu</th>
								<th scope="col" class="text-center">Cân nặng</th>
								<th scope="col" class="text-center">Giá</th>
								<th scope="col" class="text-center">Đường dẫn hình ảnh</th>
								<th scope="col" class="text-center">Trạng thái</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<?php
							include("database/db_conection.php");
							$query="select * from product";
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
						<tr>
							<td scope="row" class="text-center">
								<?php echo $product_id;  ?></td>
							<td scope="row">
								<?php echo $product_name;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_color;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_material;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_weight;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_price;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_image;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $product_visible;  ?></td>
							<td scope="row" class="text-center">
								<a href="delete_product.php?id=<?php echo $product_id ?>">
									<button class="btn btn-danger mr-2"><i class="fa fa-trash"></i> Xóa</button>
								</a>
								<a href="update_product.php?id=<?php echo $product_id ?>">
									<button class="btn btn-warning"><i class="fa fa-edit"></i> Chỉnh sửa</button>
								</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</section>
	</body>
</html>
