<html>
	<head lang="en">
		<meta charset="UTF-8"/>
		<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Danh sách quà tặng</title>
	</head>
	<body>
		<section id="user" class="parallax-section">
			<div class="container">
				<h1 align="center">Danh sách quà tặng</h1>
				<div class="d-block">
					<a type="button" href="index.php" class="btn btn-primary mr-5"><i class="fa fa-undo"></i> Trang chủ</a>
					<a type="button" href="admin.php" class="btn btn-primary"><i class="fa fa-undo"></i> Trang Admin</a>
					<a type="button" href="add_gift.php" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
				</div>
				<div class="d-block" style="margin-top:5%;">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">ID</th>
								<th scope="col">Tên quà tặng</th>
								<th scope="col" class="text-center">Màu</th>
								<th scope="col" class="text-center">Chất liệu</th>
								<th scope="col" class="text-center">Cân nặng</th>
								<th scope="col" class="text-center">Giá</th>
								<th scope="col" class="text-center">Trạng thái</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<?php
							include("database/db_conection.php");
							$view_users_query="select * from gift";
							$run=mysqli_query($dbcon,$view_users_query);

							while($row=mysqli_fetch_array($run))
							{
								$gift_id=$row[0];
								$gift_name=$row[1];
								$gift_color=$row[2];
								$gift_material=$row[3];
								$gift_weight=$row[4];
								$gift_price=$row[5];
								$gift_visible=$row[6];

						?>
						<tr>
							<td scope="row" class="text-center">
								<?php echo $gift_id;  ?></td>
							<td scope="row">
								<?php echo $gift_name;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $gift_color;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $gift_material;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $gift_weight;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $gift_price;  ?></td>
							<td scope="row" class="text-center">
								<?php echo $gift_visible;  ?></td>
							<td scope="row" class="text-center">
								<a href="delete_gift.php?id=<?php echo $gift_id ?>">
									<button class="btn btn-danger mr-2"><i class="fa fa-trash"></i> Xóa</button>
								</a>
								<a href="update_gift.php?id=<?php echo $gift_id ?>">
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
