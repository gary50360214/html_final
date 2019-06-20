
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
                <h4>課程 / 進擊！Big Data分析實務</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_BigData.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　國立臺北科技大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2015/07/01-2015/07/31</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－王貞淑</b></i>
                        <p class = "info">　　專長領域：
                            <br>　　人工智慧與資訊科技應用研究
                            <br>　　巨量資料分析與平行運算
                            <br>　　知識管理與策略發展
                            <br>　　網路管理
                            <br>　　擔任本校創新創業種子教師
                            <br>　　學歷：政治大學資訊管理博士
                            <br>　　經歷：
                            <br>　　2015 BABSON COLLEGE SEE Asia課程
                            <br>　　2014《數據科學與Big Data分析》暑期培訓
                            <br>　　2011 健康照護實務創意設計大賽獲獎
                            <br>　　中華民國資訊管理學會秘書長
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">大數據資料時代來臨，如何從巨量雜訊中，掌握隱藏於其中的重要訊息，並將其應用於生活環境中，是值得深入探究的議題。本課程「進擊！Big Data分析實務」以深入淺出的方式及多元的實際演練，搭配資料分析軟體的輔助，促使學習者能輕鬆地在龐大的資料情況下，也能瞭解基本觀念及方法，並運用於各種領域或工作場所等。</p>
                <b>課程目標</b>
                <p class = "info">本課程主要學習目標是期許學習者除了能掌握Big Data的基礎概念外，完成此課程後，更能認識並熟悉「資料處理」、「資料分析軟體應用」及「解讀分析結果」等能力。</p>
                <b>課程進度</b>
                <p class = "info">第一週：Big Data告訴你特色與數據分析工具
                <br>第二週：集群模式分析
                <br>第三週：分類模式分析
                <br>第四週：關聯模式分析
                <br>第五週：進階集群模式分析
                <br>第六週：進階分類模式分析
                <br>第七週：進階關聯模式分析
                <br>第八週：數據分析工具Mahout與反思Big Data</p>
                <b>先備知識</b>
                <p class = "info">具基本計算機概論與資料庫之相關知識。<br>例如：知悉將資料透過 Microsoft Excel 等資料統計試算表軟體進行新增、修改、查詢、刪除等匯整排序處理，以掌握資料內容點燃巨量資料價值的關鍵。</p>
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