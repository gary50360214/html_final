<?php
	require_once("php/sql_connection.php");
    
    $sql = "SELECT * FROM `board` ORDER BY `count` DESC";
    $board_result = mysqli_query($link, $sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開放式課程</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/9819ff2340.js"></script>
</head>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="logo" class="navbar-brand" href="./index.php"> <i class="fas fa-book"></i> 課程好搜尋</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" action="search.php">
      <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    

    <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link" href="blog/login_form.php">登入</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blog/register.php">註冊</a>
        </li>       
  </ul>
  </div>

</nav>
<div id="offset"></div>


<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 pb-3">
                <h4>最新課程</h4>
            </div>
            <div class="col-sm-12 col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="./classes/DeepLearning.php"><img class="d-block w-100 image-75" src="./images/classes_DeepLearning_440.jpg" alt="First slide"></a> 
                        </div>
                        <div class="carousel-item">
                            <a href="./classes/BigData.php"><img class="d-block w-100 image-75" src="./images/classes_BigData_440.jpg" alt="First slide"></a> 
                        </div>
                        <div class="carousel-item">
                            <a href="./classes/vr.php"><img class="d-block w-100 image-75" src="./images/classes_vr_440.jpg" alt="First slide"></a> 
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 pb-3">
                <h4>推薦的課程</h4>
            </div>

            <?php $count=0 ?>
            <?php while($d = mysqli_fetch_assoc($board_result)){ ?>
            <div class="col-sm-12 col-md-4">
                <a class="text-dark" style="text-decoration:none;" href="<?=$d['Introduction']?>">
                    <div class="card">
                        
                        <img class="card-img-top img-fluid " src="blog\<?=$d['title_img_url']?>" alt="">
                        
                        <div class="card-body">
                            <b><?=$d['title']?></b>
                        </div>
                        <button class="btn btn-success center-block" type="submit" onclick="location.href='./classes/society.php'">瀏覽課程</button>
                    </div>
                </a>
            </div>

            <?php
                $count++;
                if($count > 5)
                {
                    break;
                }
            ?>
            <?php }?>
        </div>
    </div>

    <footer>
        <p class="text-center pt-5">Copyright © 課程好搜尋, 2019<p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>