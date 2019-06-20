<?php
    include_once("sql_connection.php");

    $date = date("Y-m-d H:i:s");
    $sql = "UPDATE `board` 
    SET
    `title_img_url` = '{$_POST["title_img_url"]}', 
    `title` = '{$_POST["title"]}', 
    `tag` = '{$_POST["tag"]}', 
    `content` = '{$_POST["content"]}', 
    `is_released` = '{$_POST["is_released"]}',
    `fix_content_time` = '{$date}'
    WHERE `id` = '{$_POST["id"]}'";
    $query = mysqli_query($_SESSION['link'], $sql);
    $json = new stdClass();
    if($query){
        $json = array(
            'result' => true//修改成功
        );
    }else{
        $json = array(
            'result' => false//修改失敗
        );
    }
    echo json_encode($json);
?>