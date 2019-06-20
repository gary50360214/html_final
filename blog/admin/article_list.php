<?php
	ob_start();
	require_once("../../php/sql_connection.php");
	if(is_login() == 1){
		header("location:會員介面");
	}else if(is_login() != 2){
		header("location:../login_form.php");
	}
	//撈取所有文章(含未發布的)
	if(isset($_GET['tag'])){
		$decode = urldecode($_GET['tag']);
		$sql = "SELECT * FROM `board` WHERE `tag` = '{$decode}'";
	}else{
		$sql = "SELECT * FROM `board`";
	}
	$sql .=" ORDER BY `fix_content_time` DESC";
	$article_list = mysqli_query($_SESSION['link'], $sql);
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
		<title>管理文章</title>

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
		<div class="container">
			<div class="row">
				<a href="article_add.php" class="btn btn-primary mr-2 mb-2"><i class="far fa-plus-square"></i>&nbsp;&nbsp;新增文章</a>
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">分類</th>
							<th scope="col">標題</th>
							<th scope="col">是否發布</th>
							<th scope="col">建立時間</th>
							<th scope="col">修改時間</th>
							<th scope="col">管理動作</th>
						</tr>
					</thead>
					<tbody>
						<!--<tr>
							<td colspan="6">無資料</td>
						</tr> -->
<?php if(empty($article_list)):?>
						<tr><td colspan="6">無資料</td></tr>
<?php else:?>

<?php foreach($article_list as $data):?>
						<tr>
							<th scope="row"><?php echo $data['tag'];?></th>
							<td><?php echo $data['title'];?></td>
							<td><?php echo ($data['is_released'] == "1")?"是":"否";?></td>
							<td><?php echo $data['released_time'];?></td>
							<td><?php echo $data['fix_content_time'];?></td>
							<td>
								<a href="article_edit.php?id=<?php echo $data['id'];?>" class="btn btn-success"><i class="far fa-edit"></i>&nbsp;&nbsp;編輯</a>
								<a href="javascript:void(0);" class="btn btn-danger del_article" data-id="<?php echo $data['id'];?>"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;刪除</a>
							</td>
						</tr>
<?php endforeach;?>

<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>



	<script>
		$(document).ready(function(){
			$(".del_article").on("click",function(){
				var del_tr = $(this).parent().parent();
				var flag = confirm("你確定要刪除此篇文章嗎? 此動作無法回復!")
				if(flag){
					$.ajax({
						type:"POST",
						url:'../../php/del_article.php',
						data:{
							'id':$(this).attr("data-id")
						},
						dataType:'json'
					}).done(function(json){
						if(json.result){
							del_tr.fadeOut();
						}else{
							alert("刪除失敗!");
						}
					});
				}
			});
		});
	</script>

	</body>
</html>