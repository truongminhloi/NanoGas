<html>
	<head lang="en">
		<meta charset="UTF-8"/>
		<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<title>Danh sách phản hồi</title>
	</head>
	<body>
		<section id="user" class="parallax-section">
			<div class="container">
				<h1 align="center">Danh sách phản hồi</h1>
				<div class="d-block">
					<a type="button" href="index.php" class="btn btn-primary mr-5"><i class="fa fa-undo"></i> Trang chủ</a>
					<a type="button" href="admin.php" class="btn btn-primary"><i class="fa fa-undo"></i> Trang Admin</a>
				</div>
				<div class="d-block" style="margin-top:5%;">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">ID</th>
								<th scope="col">Họ và tên</th>
								<th scope="col">E-mail</th>
								<th scope="col">Thông điệp</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<?php
							include("database/db_conection.php");
							$query="select * from feedback";
							$run=mysqli_query($dbcon,$query);

							while($row=mysqli_fetch_array($run))
							{
								$id=$row[0];
								$name=$row[1];
								$email=$row[2];
								$message=$row[3];

						?>
						<tr>
							<td scope="row">
								<?php echo $id;  ?></td>
							<td scope="row">
								<?php echo $name;  ?></td>
							<td scope="row">
								<?php echo $email;  ?></td>
							<td scope="row">
								<?php echo $message;  ?></td>
							<td scope="row" class="text-center">
								<a href="delete_feedback.php?id=<?php echo $id ?>">
									<button class="btn btn-danger mr-2"><i class="fa fa-trash"></i> Xóa</button>
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
