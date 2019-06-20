<?php
	ob_start();
	require_once("../php/sql_connection.php");
	if(is_login() == 2){
		header("location:admin/index.php");
	}else if(is_login() == 1){
		header("location:admin/index.php");//普通會員
	}
	ob_end_flush();
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- favicon -->
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

		<!-- title -->
		<title>會員註冊</title>

		<!-- bootstrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		<!-- Font Awesome -->
		<script src="../js/fontawesome-all.min.js"></script>

		<!-- mystyle -->
		<link rel="stylesheet" href="../css/blog.css">
	</head>

	<body>
	<header class="container">
		<div class="row">	
			<nav class="col-sm-12 navbar navbar-expand-md navbar-light mt-3 bg-light">
				<a class="navbar-brand">課程好搜尋!</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item"><a href="../index.php">返回首頁</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
		<div class="container mt-5">
			<div class="row">
				<div class="col-10 offset-1 col-sm-6 offset-sm-3 col-lg-4 offset-lg-4 img-thumbnail">
					<h3 class="text-center text-secondary">會員註冊</h3>
					<form id="form1" method="POST" action="../php/register.php">
						<div class="form-group">
							<label for="name">姓名</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="請輸入姓名" required>
						</div>
						<div class="form-group">
							<label for="account">帳號</label>
							<input type="text" class="form-control" name="account" id="account" placeholder="請輸入帳號" required>
						</div>

						<div class="form-group">
							<label for="password">密碼</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="請輸入密碼" required>
						</div>
                        <div class="form-group">
							<label for="checkpassword">確認密碼</label>
							<input type="password" class="form-control" name="checkpassword" id="checkpassword" placeholder="請輸入密碼" required>
						</div>
						<div class="form-group text-center">
							<span id='error' class="text-danger"></span>
						</div>
						
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary w-100" name="buttn1">註冊</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$("#form1").on("submit",function(){
					$.ajax({
						type:"POST",
						url:"../php/register.php",
						data:{
							'account': $("#account").val(),
							'password': $("#password").val(),
							'name': $("#name").val(),
							'checkpassword': $("#checkpassword").val()
							},
						dataType:'json'
					}).done(function(result){
						if(result == '註冊成功'){
							window.location.href="login_form.php";
						}else{
							$("#error").text(result);
							$("#account").val("");
							$("#password").val("");
							$("#checkpassword").val("");
							$("#name").val("");
							$("#account").focus();
						}
					});
					return false;	
				});
			});
		</script>	
	</body>
</html>
