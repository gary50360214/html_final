<?php
    $json = new stdClass();
    $file_path = "../blog/".$_POST['title_img_url'];
    if(file_exists($file_path) && $_POST['title_img_url'] != 'files/images/no-image.png'){//如果檔案存在就刪除
        if(unlink($file_path)){
            $json = array(
                'result' => true//刪除成功
            );
        }else{
            $json = array(
                'result' => false//刪除失敗
            );
        }
        echo json_encode($json);
    }
?>