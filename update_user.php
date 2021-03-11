<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Cập nhật tài khoản</title>
</head>
<body style="margin:10%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cập nhật tài khoản</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="update_user.php">
                        <fieldset>
						<?php
						if(!isset($_POST['update_user']))
						{
							include("database/db_conection.php");
							$id=$_GET['id'];
							$query="select * from users WHERE id=$id";
							$run=mysqli_query($dbcon,$query);
							while($row=mysqli_fetch_array($run))
							{
								$user_id=$row[0];
								$user_name=$row[1];
								$user_pass=$row[2];
								$user_email=$row[3];
							?>
							<input class="form-control" name="id" type="hidden" value="<?php echo (isset($id))?$id:'';?>" >
                            <div class="form-group">
                                <input class="form-control" placeholder="Họ và tên" name="name" type="text" value="<?php echo (isset($user_name))?$user_name:'';?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo (isset($user_email))?$user_email:'';?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="text" value="<?php echo (isset($user_pass))?$user_pass:'';?>">
                            </div>
                            <input class="btn btn-lg btn-warning btn-block" type="submit" value="Cập nhật" name="update_user" >
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
if(isset($_POST['update_user']))
{
	$user_id=$_POST['id'];
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];
    if($user_id=='')
    {
        echo"<script>alert('Không thể cập nhật user')</script>";
		exit();
    }
    if($user_name=='')
    {
        echo"<script>alert('Vui lòng điền tên tài khoản')</script>";
		exit();
    }

    if($user_pass=='')
    {
        echo"<script>alert('Vui lòng điền mật khẩu tài khoản')</script>";
		exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Vui lòng điền email tài khoản')</script>";
		exit();
    }

	$update_user="UPDATE users SET user_name ='$user_name',user_pass ='$user_pass',user_email ='$user_email' WHERE id =$user_id ";
	mysqli_query($dbcon,$update_user);
	header( "Location: user_management.php" );
}
?>