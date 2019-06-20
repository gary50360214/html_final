<?php   
    require_Once("sql_connection.php");
    $password = md5($_POST['password']);
    $account = $_POST['account'];
    $sql = "SELECT * FROM `admin` WHERE `account` = '{$account}' AND `password` = '{$password}'";
    $query = mysqli_query($_SESSION['link'], $sql);
    $json = new stdClass();
    if(mysqli_num_rows($query) >=1){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['auth'] = $data['auth'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['account'] = $data['account'];
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