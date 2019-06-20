<?php
    require_once("sql_connection.php");
    $sql = "SELECT * FROM `board` WHERE `id` = '{$_POST["id"]}'";
    $data = mysqli_fetch_assoc(mysqli_query($_SESSION['link'], $sql));

    $file_path = "../blog/".$data['title_img_url'];
    if(file_exists($file_path) && $data['title_img_url'] != 'files/images/no-image.png'){//如果檔案存在就刪除
        unlink($file_path);
    }

    $sql = "DELETE FROM `board` WHERE `id` = '{$_POST["id"]}'";
    $query = mysqli_query($_SESSION['link'], $sql);

    $json = new stdClass();
    if($query){
        $json = array(
            'result' => true
        );
    }else{
        $json = array(
            'result' => false
        );
    }
    echo json_encode($json);
    ?>