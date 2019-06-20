
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
                <h4>課程 / 電子創客魔法學院－從Arduino電子學開始</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_arduino.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　輔仁大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2015/02/28-2015/03/31</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－張敏娟</b></i>
                        <p class = "info">　　台灣大學物理所博士，成功大學物理系學士及碩士。
                            <br>　　校內曾擔任：
                            <br>　　教師發展與教學資源中心主任
                            <br>　　教學卓越計畫執行長
                            <br>　　磨課師計畫執行長
                            <br>　　學術交流中心主任
                            <br>　　國際合作補助案執行長。
                            <br>　　校外擔任：
                            <br>　　科技部計畫主持人與共同主持人
                            <br>　　科學月刊理事。　
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">世界各地的自創者風潮，帶動了許多創客（Maker）社團的林立。在大學校園裡，原本就有的電路學、電子學、電子學實驗課程，只專屬於理工科系學生。然而，跨領域的學習，往往能夠激發出不同的創作火花。例如，藝術學院的學生，如果能夠加上一點電子學知識與實作能力，可以讓自己的藝術作品再增加實用價值。
 本課程使用的「Arduino」，為近年相當熱門的單晶片微控制器，其電路圖設計是遵循創用CC的開放原始碼。該控制器的除取得方便、價格低廉外，更可利用Arduino語言，結合種類與樣式豐富的電子元件(例如開關、感測器、控制器、LED、步進馬達或其他輸出裝置等)，做出創意十足的互動作品(如電吉他、空氣鼓、機器人與小夜燈等)，讓電路學和電子學緊扣「創客」精神，創作出具生活實用價值的互動作品。</p>
                <b>課程目標</b>
                <p class = "info">1.修課學員可以獲得基礎的電路學與電子學知識。<br>
                    2.修課學員可以學會利用Arduino電路板和軟體程式。<br>
                    3.修課學員可以發揮創意讓傳統的電子產品變得更多元。</p>
                <b>課程進度</b>
                <p class = "info">第一週：魔法小夜燈<br>
                    第二週：魔法光劍<br>
                    第三週：魔法音樂盒<br>
                    第四週：魔法共鳴器<br>
                    第五週：魔法收音機<br>
                    第六週：魔法電磁波偵測器<br>
                    第七週：魔法毛怪<br>
                    第八週：魔法遙控車<br>
                    第九週：魔法機械手臂</p>
                <b>先備知識</b>
                <p class = "info">電路學基本概念</p>
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