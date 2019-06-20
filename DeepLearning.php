
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
                <h4>課程 / 深度學習</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_DeepLearning.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　國立中正大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2017/04/16-2017/05/15</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－游寶達</b></i>
                        <p class = "info">　　現職：
                            <br>　　國立中正大學資工系教授
                            <br>　　學經歷：
                            <br>　　美國普渡大學電機工程博士
                            <br>　　專長：
                            <br>　　智慧型系統設計
                            <br>　　智慧型網路
                            <br>　　ICAL
                            <br>　　非線性系統
                            <br>　　e-Learning
                            <br>　　電腦輔助教學
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">細說深度學習的因由、細節、應用、未來，其中細推學習演算法的公式，有助於高中生都可以理解本課程(目前線上課程大都直接display出公式，不易被剛入門的學生所接受)，並配合Python的程式演繹，引發學生對程式設計的興趣。主要以PPT細說公式，再配合Python程式印證一遍，以加強學生的學習動力及內涵，同時老師將利用去背的功能，隨時與教材互動，以產生teacher-led的教學效果。 </p>
                <b>課程目標</b>
                <p class = "info">1.建立深度學習的基本知識，例如Supervised Learning, Unsupervised Learning, Perceptron Learning Algorithm, Performance Function, Steepest Descent, LMS Algorithm等。 
                    <br>2.學習Deep Learning的兩大模式：Convolution Neural Network及Recurrent Neural Network。 
                    <br>3.學習操作CAFFE及CNTK兩大開放套件。 
                    <br>4.學習如何利用CAFFE及CNTK設計深度學習的應用問題。 5.加強Python的程式設計能力。</p>
                <b>課程進度</b>
                <p class = "info">第1週：Introduction-課程介紹<br>
                    第2週：The Concept of Perceptron-認知概念<br>
                    第3週：Optimal Learning-優化學習<br>
                    第4週：LMS Learning Algorithm-最小均差學習演算法<br>
                    第5週：The Backpropagation Algorithm-背傳導演算法<br>
                    第6週：Convolution Neural Network-卷積神經網路<br>
                    第7週：CNN Develop Tools-卷積神經網路開發工具<br>
                    第8週：Recurrent Neural Network-循環神經網路<br>
                    第9週：RNN Develop Tools RNN-開發工具</p>
                <b>適用對象</b>
                <p class = "info">高中以上，對程式設計、軟體開發、深度學習等相關議題有興趣者。</p>
                <b>先備知識</b>
                <p class = "info">具備國中程度的數學知識，若曾經或正在修習高中數學科目者更佳。</p>
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