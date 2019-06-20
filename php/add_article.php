<?php
    
    require_once("sql_connection.php");
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `board`(`title_img_url`, `title`, `tag`, `content`, `is_released`, `released_time`, `fix_content_time`)
    VALUES ('{$_POST["title_img_url"]}','{$_POST["title"]}','{$_POST["tag"]}','{$_POST["content"]}','{$_POST["is_released"]}','{$date}', '{$date}')";
    $query =  mysqli_query($_SESSION['link'], $sql);
    $json = new stdClass();
    if($query){
        $json = array(
            'result' => true//新增成功
        );
    }else{
        $json = array(
            'result' => false//新增失敗
        );
    }
    echo json_encode($json);
?>