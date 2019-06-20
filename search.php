<?php
	require_once("php/sql_connection.php");
    
    
    $sql = "SELECT * FROM `board` WHERE `title` LIKE '%" . $_GET['search'] . "%' OR `tag` LIKE '%" . $_GET['search'] . "%' OR `content` LIKE '%" . $_GET['search'] . "%';";
    
    $search_result = mysqli_query($link, $sql);

    $data = [];

    if(isset($_GET['search']) && $_GET['search'] != "" )
    {
        while($d = mysqli_fetch_assoc($search_result)){
            $data[] = $d;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開放式課程</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/search.css">
    <script src="https://kit.fontawesome.com/9819ff2340.js"></script>
</head>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="logo" class="navbar-brand" href="./index.php"> <i class="fas fa-book"></i> 課程好搜尋</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?=$_GET['search'] ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="">登入</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">註冊</a>
        </li>       
    </ul>
  </div>

</nav>
<div id="offset"></div>

<div class="container">
    <?php if(count($data) > 0){ ?>
        <?php foreach($data as $d){ ?>
        <div class="col-sm-12 col-md-12">
            <div class="card" id = "first_search">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 align-self-center">
                            <a href="./classes.php"><img class = "card-img-top" src="blog\<?=$d['title_img_url']?>" alt=""></a>
                        </div>
                        <div class="col-sm-12 col-md-7 align-self-center">
                            <i class="fas fa-pencil-alt"><b><?=$d['title']?></b></i>
                            <p><?=$d['content']?></p>
                        </div>
                        <div class="col-sm-12 col-md-2 text-center align-self-center">
                            <button class="btn btn-success" type="submit" onclick="location.href='./classes.php'">瀏覽課程</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    <?php }else{ ?>
        <div style="height: 100px;">&nbsp;</div>
        <div class="col-sm-12 col-md-12">
            <div class="alert alert-info">資料查無</div>
        </div>
        <div style="height: 220px;">&nbsp;</div>
    <?php }?>

</div>  
    <div style="height: 200px;">&nbsp;</div>
    <footer class="mt-5">
        <p class="text-center pt-5">Copyright © 課程好搜尋, 2019<p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>