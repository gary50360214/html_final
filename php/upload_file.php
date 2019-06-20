<?php    
    $json = new stdClass();
    $image_name = date("Y-m-d-H-i-s")."-".$_FILES['image']['name']."";//替圖片加上日期時間前戳
    $save_path = "../blog/{$_POST['save_path']}{$image_name}";//保存路徑
    if(file_exists($_FILES['image']['tmp_name'])){//如果站存檔內有資料
        if(move_uploaded_file($_FILES['image']['tmp_name'], $save_path)){//那就搬移
            $json = array(
                'result' => true,//搬移成功
                'file_name' => $image_name//將更名後的檔名回傳
            );
        }else{
            $json = array(
                'result' => false//搬移失敗
            );
        }
        echo json_encode($json);
    }   
?>