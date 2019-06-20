<?php
    require_once("../php/sql_connection.php");

	if(is_login() == -1) {
		header("location: login_form.php"); //沒登入
		die();
    }
    
    $sql = "SELECT * FROM `board` WHERE `id` = '{$_GET['id']}' AND `is_released` = '1'";
    $data = mysqli_fetch_assoc(mysqli_query($_SESSION['link'], $sql));
    $sql2 = "UPDATE `board` SET `count` = `count` + 1 WHERE `id` = '{$_GET['id']}';";
    mysqli_query($_SESSION['link'], $sql2);

    //觀看紀錄
    $sql3 = "INSERT INTO `watched` SET `user_account` = '" . $_SESSION['account'] . "', `board_id` = '" . $_GET['id'] . "', `time` = NOW();";
    mysqli_query($_SESSION['link'], $sql3);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- favicon -->
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

        <!-- title -->
        <title><?php echo $data['title']; ?></title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <!-- Font Awesome -->
        <script src="../js/fontawesome-all.min.js"></script>


        <!-- mystyle -->
        <link rel="stylesheet" href="../css/blog.css">

        <link rel="stylesheet" href="../css/vs2015.css">
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body>

        <?php include_once("menu.php");?>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1><?php echo $data['title'];?></h1>
                    <hr>
                    <?php echo $data['content'];?>
                </div>
            </div>
        </div>
        
    </body>
</html>