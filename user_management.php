<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Danh sách người dùng</title>
</head>
<body>
<div class="table-scrol">
<h1 align="center">Danh sách người dùng</h1>

<div class="table-responsive col-md-11 m-auto">
    <div class="mb-5">
		<a href="add_user.php"><button class="btn btn-success">Thêm user</button></a>
	</div>
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>

            <th>Id</th>
            <th>Họ và tên</th>
			<th>Password</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        </thead>
        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];

        ?>

        <tr>
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td>
			<a href="delete_user.php?del=<?php echo $user_id ?>"><button class="btn btn-danger mr-2">Xóa</button></a>
			<a href="update_user.php?del=<?php echo $user_id ?>"><button class="btn btn-warning">Chỉnh sửa</button></a>
			</td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
