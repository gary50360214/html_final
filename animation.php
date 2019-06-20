
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
                <h4>課程 / 動畫短片導演概論</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_animation.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　國立雲林科技大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2019/011/01-2019/11/30</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－陳世昌</b></i>
                        <p class = "info">　　現職：國立雲林科技大學數位媒體設計系副教授
                            <br>　　教師簡述：
                            <br>　　國立雲林科技大學 數位媒體設計系曁數位媒體設計碩士班 副教授 
                            <br>　　2010韓國首爾動畫影展SICAF評審委員/48屆金鐘獎評審委員
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">「動畫導演這麼高深，也能訓練! 」<br>這就是本課程的挑戰與突破，透過老師的深入淺出講解，將會使學員理解導演的專業能力，以及需要具備的條件。</p>
                <b>課程目標</b>
                <p class = "info">1. 本課程將教導學員對「動畫導演」能有一正確的定義與認識，並使學員能學習當一個有能力且專業的導演。<br>
                    2. 本課程將歸納導演的職責與具備的條件能力，使學員能明確的去充實自己的能力，強化不足之處。<br>
                    3. 本課程將教透過動畫導演的工作範圍，教導學員認識完整的動畫作業流程和專業的技術。</p>
                <b>適用對象</b>
                <p class = "info">1. 各動畫創作單位與個人<br>
                    2.擔任動畫公司企劃部門相關工作者<br>
                    3.對動畫導演工作有興趣的各界人士<br>
                    4.為「2D動畫製作」「動畫短片製作寶典」兩門磨課師之學員<br>
                    5.從事動畫教學相關教職人士</p>
                <b>先備知識</b>
                <p class = "info">1.喜愛電影，對電影有基本知識者 <br>
                    2.有拍攝微電影或參予者等 <br>
                    3.曾學習「2D動畫製作」「動畫短片製作寶典」兩磨課師課程者</p>
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