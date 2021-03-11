<html>
	<head lang="en">
		<meta charset="UTF-8"/>
		<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Danh sách người dùng</title>
	</head>
	<body>
		<section id="user" class="parallax-section">
			<div class="container">
				<h1 align="center">Danh sách người dùng</h1>
				<div class="d-block">
					<a type="button" href="index.php" class="btn btn-primary mr-5"><i class="fa fa-undo"></i> Trang chủ</a>
					<a type="button" href="admin.php" class="btn btn-primary"><i class="fa fa-undo"></i> Trang Admin</a>
					<a type="button" href="add_user.php" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
				</div>
				<div class="d-block" style="margin-top:5%;">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">ID</th>
								<th scope="col">Họ và tên</th>
								<th scope="col">Password</th>
								<th scope="col">E-mail</th>
								<th scope="col"> </th>
							</tr>
						</thead>
						<?php
							include("database/db_conection.php");
							$query="select * from users";
							$run=mysqli_query($dbcon,$query);

							while($row=mysqli_fetch_array($run))
							{
								$user_id=$row[0];
								$user_name=$row[1];
								$user_email=$row[2];
								$user_pass=$row[3];

						?>
						<tr>
							<td scope="row" class="text-center">
								<?php echo $user_id;  ?></td>
							<td scope="row">
								<?php echo $user_name;  ?></td>
							<td scope="row">
								<?php echo $user_email;  ?></td>
							<td scope="row">
								<?php echo $user_pass;  ?></td>
							<td scope="row" class="text-center">
								<a href="delete_user.php?id=<?php echo $user_id ?>">
									<button class="btn btn-danger mr-2"><i class="fa fa-trash"></i> Xóa</button>
								</a>
								<a href="update_user.php?id=<?php echo $user_id ?>">
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
