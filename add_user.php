
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Đăng ký tài khoản</title>
</head>
<body style="margin:10%; background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký tài khoản</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="add_user.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Họ và tên" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng ký" name="add_user" >

                        </fieldset>
                    </form>
                    <center><b>Bạn đã có tài khoản ?</b> <br></b><a href="login.php">Đăng nhập</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php

include("database/db_conection.php");
if(isset($_POST['add_user']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];


    if($user_name=='')
    {
        echo"<script>alert('Please enter the name')</script>";
exit();
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('index.php','_self')</script>";
    }

}
?>