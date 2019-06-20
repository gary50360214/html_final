<?php
	require_once("../../php/sql_connection.php");
	if(is_login() == 1){
		header("location:會員介面");
	}else if(is_login() != 2){
		header("location:../login_form.php");
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
		<title>文章新增</title>

		<!-- bootstrap -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<script src="../../js/jquery-3.2.1.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>

		<!-- Font Awesome -->
		<script src="../../js/fontawesome-all.min.js"></script>


		<!-- mystyle -->
		<link rel="stylesheet" href="../../css/blog.css">

		<!-- ckeditor -->
		<script src="../../plugin/ckeditor/ckeditor.js"></script>

		<!-- ckfinder -->
		<script src="../../plugin/ckfinder/ckfinder.js"></script>
	</head>

	<body>
		<!-- nav -->
		<?php include_once("menu.php"); ?>

		<!-- content -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 px-0">
					<form id="article">

						<div class="form-group mb-5">
    						<label for="title_img">標題圖片</label>
    						<input type="file" class="form-control-file" id="title_img">
							<input type="hidden" id='title_img_url' value="files/images/no-image.png">
							<div id="show_image">
								<img src="../files/images/no-image.png" alt="文章圖片">
							</div>
								<a id="del_image" href='javascript:void(0);'>刪除</a>
  						</div>

						<div class="form-group">
							<label for="title">標題</label>
							<input type="text" class="form-control" id="title" placeholder="請輸入標題" required>
						</div>
						
						<div class="form-group">
							<label for="tag">分類標籤</label>
							<input type="text" class="form-control" id="tag" placeholder="請輸入分類標籤" required>
						</div>
						<div class="form-group">
							<label for="content">文章內容</label>
							<textarea class="form-control" id="content" rows="30" placeholder="請輸入文章內容" required></textarea>
							<script>
								CKFinder.setupCKEditor();
								CKEDITOR.replace( 'content', {});
							</script>
						</div>

						<div class="form-grop mb-5">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="is_released" id="inlineRadio1" value="1" checked>發布
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="is_released" id="inlineRadio2" value="0">不發布
								</label>
							</div>
						</div>
						<button type="button" id='btn1' class="btn btn-primary">送出</button>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function(){
				//一開始沒有選擇圖片 所以隱藏刪除鈕 
				$("#del_image").hide();


				//當圖片選擇後自動上傳
				$("#title_img").change(function(){
					//如果之前有選過但沒有按刪除就自動刪除圖片以便取代
					if($("#title_img").val() != '' && $("#title_img_url").val() != 'files/images/no-image.png'){
						$.ajax({
							type:"POST",
							url:'../../php/del_file.php',
							data:{
								'title_img_url':$("#title_img_url").val()
							},
							dataType:'json'
						}).done(function(json){
							if(json.result){
								$("#show_image img").attr('src', "");
								$('#title_img').val("");
								$("#del_image").hide();
								$("#title_img_url").val('files/images/no-image.png');
							}
						});
					}

					//無論是否有刪圖片都要上傳新圖檔
					var image = $("#title_img")[0].files[0];//圖片資訊
					var save_path = "files/images/";//要存的資料夾
					var form_data = new FormData();//建立一個資料結構等等post
					form_data.append("image", image);//將圖片資訊放進form_data
					form_data.append("save_path", save_path);//將要保存的路徑存入form_data
					
					$.ajax({
						type:"POST",
						url:'../../php/upload_file.php',
						data : form_data,
						cache:false,
						processData:false,
						contentType:false,
						dataType:'json'
					}).done(function(json){
						if(json.result){
							//上傳完畢
							$("#show_image img").attr('src', "../" + save_path + json.file_name );//更改src路徑
							$('#title_img_url').val(save_path + json.file_name);//將路徑放到隱藏欄位
							$("#del_image").show();//顯示刪除鈕
						}else{
							alert("上傳失敗請在試一次");
						}
					});
				});



				//圖片刪除事件
				$("#del_image").on("click", function(){
					var flag = confirm("是否確定要刪除圖片");
					if(flag){
						$.ajax({
							type:"POST",
							url:'../../php/del_file.php',
							data:{
								'title_img_url':$("#title_img_url").val()
							},
							dataType:'json'
						}).done(function(json){
							if(json.result){
								$("#show_image img").attr('src', "../files/images/no-image.png");
								$('#title_img').val("");
								$("#del_image").hide();
								$("#title_img_url").val('files/images/no-image.png');
							}else{
								alert("刪除失敗!");
							}
						});
					}
				});


				//表單送出時的事件
				$("#btn1").on("click",function(){
					$.ajax({
						type:"POST",
						url:'../../php/add_article.php',
						data:{
							'title_img_url':$("#title_img_url").val(),
							'title':$("#title").val(),
							'tag':$("#tag").val(),
							'content':CKEDITOR.instances.content.getData(),
							'is_released':$("input[name='is_released']:checked").val()
						},
						dataType:'json'
					}).done(function(json){
						if(json.result){
							alert('新增成功，即將轉跳到文章管理');
							window.location.href='article_list.php';
						}else{
							alert('新增失敗，請再試一次');
						}
						return false;
					});
				});
								
			});
		
		</script>
	</body>
</html>