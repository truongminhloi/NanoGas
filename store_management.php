<html>
	<head lang="en">
		<meta charset="UTF-8"/>
		<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Danh sách cửa hàng</title>
	</head>
	<body>
		<section id="user" class="parallax-section">
			<div class="container">
				<h1 align="center">Danh sách cửa hàng</h1>
				<div class="d-block">
					<a type="button" href="index.php" class="btn btn-primary mr-5"><i class="fa fa-undo"></i> Trang chủ</a>
					<a type="button" href="admin.php" class="btn btn-primary"><i class="fa fa-undo"></i> Trang Admin</a>
					<a type="button" href="add_store.php" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
				</div>
				<div class="d-block" style="margin-top:5%;">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">ID</th>
								<th scope="col">Tên cửa hàng</th>
								<th scope="col" class="text-center">Địa chỉ</th>
								<th scope="col" class="text-center">Số điện thoại</th>
								<th scope="col" class="text-center">Trạng thái</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<?php
							include("database/db_conection.php");
							$view_users_query="select * from store";
							$run=mysqli_query($dbcon,$view_users_query);

							while($row=mysqli_fetch_array($run))
							{
								$store_id=$row[0];
								$store_name=$row[1];
								$store_address=$row[2];
								$store_phone=$row[3];
								$store_visible=$row[4];

						?>
						<tr>
							<td scope="row" class="text-center">
								<?php echo $store_id;  ?></td>
							<td scope="row">
								<?php echo $store_name;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $store_address;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $store_phone;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $store_visible;  ?></td>
							<td scope="row" class="text-center">
								<a href="delete_store.php?id=<?php echo $store_id ?>">
									<button class="btn btn-danger mr-2"><i class="fa fa-trash"></i> Xóa</button>
								</a>
								<a href="update_store.php?id=<?php echo $store_id ?>">
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
