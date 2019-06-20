<?php
	require_once("../php/sql_connection.php");
	if(is_login() == -1) {
		header("location: ../login_form.php"); //沒登入
		die();
	}
?>
<?php
	//撈取文章
	if(isset($_GET['tag'])){
		$decode = urldecode($_GET['tag']);
		$sql = "SELECT * FROM `board` WHERE `is_released` = '1' AND `tag` = '{$decode}'";
	}else{
		$sql = "SELECT * FROM `board` WHERE `is_released` = '1' ";
	}

	$sql .=" ORDER BY `fix_content_time` DESC";
	$article_list = mysqli_query($_SESSION['link'], $sql);
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
		<title>所有課程</title>

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
		<!-- nav -->
		<?php include_once("menu.php"); ?>

		<!-- content -->
		<div class="container">
			<div class="row">
				<!-- card -->
<?php foreach($article_list as $data): ?>
<?php
	$str = mb_substr(strip_tags($data['content']), 0, 100, "UTF-8")."...";//先去除html元素 再取100字
?>
				<div class="col-12 col-sm-12 px-0">
					<div class="card bg-light mb-3">
						<div class="card-header"><?php echo $data['title'];?></div>
						<div class="card-body row">
							<div id='card-img' class="col-12 col-sm-2">
								<img class="img-fluid" src="<?php echo $data['title_img_url'];?>" alt="文章圖片">
							</div>

							<div class="col-12 col-sm-10">
								<a href="article_list.php?tag=<?php echo urlencode($data['tag']);?>" class="badge badge-success py-2 px-2 mb-2 "><?php echo $data['tag']; ?></a>
								<span class="badge badge-secondary py-2 px-2 mb-2 ">發布日期：<?php echo $data['released_time'];?></span>
								<span class="badge badge-secondary py-2 px-2 mb-2 ">修改日期：<?php echo $data['fix_content_time'];?></span>
								<p><?php echo $str; ?></p>
							</div>
							<div class="col-12 col-sm-12">
								<a href="article.php?id=<?php echo $data['id'];?>" class="btn btn-primary float-right"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;閱讀更多</a>
							</div>
						</div>
					</div>
				</div>
<?php endforeach;?>

			</div>
		</div>
	</body>

</html>