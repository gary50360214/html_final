
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開放式課程</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/classes.css">
    <script src="https://kit.fontawesome.com/9819ff2340.js"></script>
</head>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="logo" class="navbar-brand" href="index.php"> <i class="fas fa-book"></i> 課程好搜尋</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="location.href='../search.php'">Search</button>
    </form>

    <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link" href="../login_form.php">登入</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../register.php">註冊</a>
        </li>       
  </ul>
  </div>

</nav>
<div id="offset"></div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 pl-0 pr-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="thumbnail text-center">
                                    <img class="d-block w-100 image-100" src="images/classes_main.jpg" alt="First slide">
                                    <div class="caption">
                                        <h1>課程資訊</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 pb-3">
                <h4>課程 / 第一次玩Unity 3D就上手：VR實戰教學</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_vr.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　國立交通大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2018/08/01-2018/08/31</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－李俊逸</b></i>
                        <p class = "info">　　國立臺灣藝術大學 多媒體動畫藝術學系 專任助理教授
                            <br>　　國立交通大學 傳播與科技學系 兼任助理教授
                            <br>　　亞洲大學數位媒體設計系　講師
                            <br>　　世新大學多媒體設計學系　兼任講師
                            <br>　　元智大學資訊傳播學系　兼任講師
                            <br>　　中國科技大學多數位媒體設計學系　兼任講師
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">本課程將由多年開發VR專案經驗以及VR教學經驗的俊逸老師傳授如何以簡易的Google Cardboard VR設備搭配Unity3D製作可於手機觀看的VR專案，課程將從基本VR概論開始講起，接著進入Unity3D實作，搭配Google Cardboard SDK，讓從未寫過程式的人，亦能夠輕易地完成一件VR作品，並且發布上架。</p>
                <b>課程目標</b>
                <p class = "info">1. 學習VR的發展與歷史<br>
                    2. 學習Unity3D的下載及註冊方式。<br>
                    3. 學習如何取得簡易Google Cardboard VR設備。<br>
                    4. 學習如何以Google Cardboard觀看VR作品。<br>
                    5. 學習Google Cardboard的成像原理。<br>
                    6. 學習Unity3D的基本操作。<br>
                    7. 學習如何使用Unity3D以及Google Cardboard SDK完成一件VR專題。<br>
                    8. 學習如何將VR專案發布至手機，並且上架提供下載。</p>
                <b>適用對象</b>
                <p class = "info">一般社會大眾</p>
                <b>先備知識</b>
                <p class = "info">Unity基本操作、3D建模與動畫、基本C#程式語言</p>
            </div>

            <div class="col-sm-12 col-md-12 pb-4 text-center">
                <button class="btn btn-warning" type="submit">報名課程</button>
            </div>

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