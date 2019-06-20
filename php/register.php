<?php
    require_Once("sql_connection.php");

    $json = new stdClass();

    $password = md5($_POST['password']);
    $account = $_POST['account'];
    $name = $_POST['name'];

    if($_POST['password'] == $_POST['checkpassword']){
        $sql = "SELECT * FROM `admin` WHERE `account` = '{$account}'";
        $query = mysqli_query($_SESSION['link'], $sql);
        if(mysqli_num_rows($query) == 0){
           
            $sql = "INSERT INTO `admin` (`account`, `password`, `name`) VALUES ('{$account}','{$password}','{$name}')";
            mysqli_query($_SESSION['link'], $sql);
            $json = '註冊成功';
        }else{
            $json = '帳號已被註冊過';
        }
    }else{
        $json = '密碼不一致';
    }
    echo json_encode($json);
?>