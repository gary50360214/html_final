<?php
	require_once("../../php/sql_connection.php");
	if(is_login() != 2) {
		if(is_login() == 1) {
			header("location: ../article_list.php");//普通會員
			die();
		}else{
			header("location: ../login_form.php"); //沒登入
			die();
		}
	}
?>
<!DOCTYPE html>
<html lang="zh-TW">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- favicon -->
		<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">

		<!-- title -->
		<title>後台首頁</title>

		<!-- bootstrap -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<script src="../../js/jquery-3.2.1.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>

		<!-- Font Awesome -->
		<script src="../../js/fontawesome-all.min.js"></script>


		<!-- mystyle -->
		<link rel="stylesheet" href="../../css/blog.css">
	</head>

	<body>
		<!-- nav -->
		<?php include_once("menu.php"); ?>

		<!-- content -->
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-success text-center" role="alert">歡迎來到後台首頁</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>