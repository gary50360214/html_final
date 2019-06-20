<?php
	$file_name = basename($_SERVER['PHP_SELF'], ".php");
	switch($file_name){
		case 'article_list':
		case 'article_edit':
		case 'article'://文章列表 或閱讀文章
			$page_index = 1;
			break;
		case 'admin_userlist':
			$page_index = 2;
			break;	
		default:
			$page_index = 0;//管理端首頁
			break;
	}
?>



<header class="container">
	<div class="row">
	
	<nav class="col-sm-12 navbar navbar-expand-md navbar-light mt-5 bg-light">
	<span class="navbar-brand text-secondary"><?php echo $_SESSION['name'];?> 你好</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills navbar-nav">
				<li class="nav-item"><a class="nav-link text-primary" href="../index.php">前台首頁</a></li>
				<li class="nav-item"><a class="nav-link <?php echo($page_index == 0)?'active text-white':'text-primary'; ?>" href="index.php">後台首頁</a></li>
				<li class="nav-item"><a class="nav-link <?php echo($page_index == 1)?'active text-white':'text-primary' ;?>" href="article_list.php">管理文章</a></li>
				<li class="nav-item"><a class="nav-link <?php echo($page_index == 2)?'active text-white':'text-primary' ;?>" href="admin_userlist.php">使用者列表</a></li>
				<li class="nav-item"><a class="nav-link text-primary " href="../../php/logout.php">登出</a></li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron col-sm-12">
		<h1 class="text-center">課程好搜尋</h1>
	</div>
	</div>
</header>