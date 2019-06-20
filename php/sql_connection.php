<?php
	//資料庫主機設定
	session_start();

	$server = "localhost";
	$id = "blog";
	$pwd = "00000000";
	$dbname = "blog";
	//設定資料連線
	$link = mysqli_connect($server, $id, $pwd, $dbname);
	mysqli_query( $link, "set names utf8");
	$_SESSION['link'] = $link;
	if($_SESSION['link']){
		mysqli_query($_SESSION['link'], "SET NAMES utf8");
	}else{
		die("伺服器連接失敗！");
	}

	function is_login(){
		//如果已經登入過了 那就直接轉跳到後台
		if(isset($_SESSION['auth'])){
            return $_SESSION['auth'];
		}
		
		return -1;
    }
?>