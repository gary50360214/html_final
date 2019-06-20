<?php
	$file_name = basename($_SERVER['PHP_SELF'], ".php");
	switch($file_name){
		case 'article_list':
		case 'article'://文章列表 或閱讀文章
			$page_index = 1;
			break;
		case 'login_form'://登入
			$page_index = 2;
			break;
		case 'register'://註冊
			$page_index = 3;
			break;
		default:
		$page_index = 0;//首頁
		break;
	}

?>

<header class="container">
	<div class="row">
	
	<nav class="col-sm-12 navbar navbar-expand-md navbar-light mt-5 bg-light">
		<a class="navbar-brand" href="#">課程好搜尋!</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

 
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav">
				<li class="nav-item"><a class="nav-link " href="../index.php">首頁</a></li>
				<li class="nav-item"><a class="nav-link <?php echo($page_index == 1)?'active':'' ;?>" href="article_list.php">課程列表</a></li>
				<li class="nav-item"><a class="nav-link <?php echo($page_index == 2)?'active':'' ;?>" href="http://<?= $_SERVER['SERVER_NAME'] . "/abc/blog/watched_list.php"; ?>">觀看紀錄</a></li>
				<li class="nav-item"><a class="nav-link " href="http://<?= $_SERVER['SERVER_NAME'] . "/abc/php/logout.php"; ?>">登出</a></li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron col-sm-12 mt-5">
		<h1 class="text-center">課程好搜尋!</h1>
	</div>
	</div>
</header>