<?php
    require_once("../../php/sql_connection.php");
    
	//取得所有使用者
    $sql = "SELECT * FROM `admin` WHERE 1";
    $user_list_result = mysqli_query($_SESSION['link'], $sql);
    
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
		<title>使用者列表</title>

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
                        <h3>使用者列表</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>帳號</td>
                                    <td>名稱</td>
                                    <td>權限</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($d = mysqli_fetch_assoc($user_list_result)){ ?>
                                <tr>
                                    <td><?=$d['account']?></td>
                                    <td><?=$d['name']?></td>
                                    <td><?=$d['auth']?></td>
                                    <td>
                                        <a href="watched.php?account=<?=$d['account']?>">觀看紀錄</a>
                                    
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</body>

</html>