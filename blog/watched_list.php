<?php
    require_once("../php/sql_connection.php");
    
    if(is_login() == -1) {
		header("location: ../login_form.php"); //沒登入
		die();
    }
    
	//取得所有使用者
    $sql = "SELECT * FROM `watched` LEFT JOIN `board` ON `board`.`id` = `watched`.`board_id` WHERE `user_account` = '{$_SESSION['account']}';";
    $user_list_result = mysqli_query($_SESSION['link'], $sql);
    
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
		<title>觀看紀錄</title>

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
        <div class="main">
            <div class="container"> 
                <div class="row">
                    <div class="col-sm-12">
                        <h3>觀看紀錄</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>使用者帳號</td>
                                    <td>影片標題</td>
                                    <td>觀看時間</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 0; ?>
                                <?php while($d = mysqli_fetch_assoc($user_list_result)){ ?>
                                <?php $count ++; ?>
                                <tr>
                                    <td><?=$d['user_account']?></td>
                                    <td><?=$d['title']?></td>
                                    <td><?=$d['time']?></td>
                                </tr>
                                <?php }?>
                                <?php if($count == 0){ ?>
                                <tr>
                                    <td colspan="3"><b>這個人什麼都沒看過</b></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button class="btn btn-default" onclick="history.back()">返回</button>
            </div>
            
        </div>
	</body>

</html>