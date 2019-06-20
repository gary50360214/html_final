
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
                <h4>課程 / 小數界大學問－翻轉生活數學</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card" id = "teacher_info">
                    <img class="card-img-top" src="images/classes_math.jpg">
                    <div class="card-body">
                        <i class="far fa-calendar-check"><b> 開課學校</b></i>
                        <p class = "info">　　逢甲大學</p>
                        <i class="far fa-calendar-check"><b> 開課日期</b></i>
                        <p class = "info">　　2019/07/01-2019/08/18</p>
                        <i class="far fa-calendar-check"><b> 授課平臺</b></i>
                        <p class = "info">　　OpenEdu</p>
                        <i class="far fa-calendar-check"><b> 授課教師－張其棟</b></i>
                        <p class = "info">　　現職：逢甲大學微積分教學中心 副教授
                        <br>　　學歷：國立清華大學數學系　博士
                        <br>　　經歷：
                        <br>　　逢甲大學微積分教學中心　助理教授
                        <br>　　國立交通大學應用數學系　博士後研究人員
                        <br>　　科技部與逢甲大學等教學研究計畫主持人
                        <br>　　高中磨課師計畫審查委員
                        <br>　　高中磨課師教學影片審查委員
                        <br>　　簡述：
                        <br>　　專長為
                        <br>　　數學分析Mathematical Analysis
                        <br>　　泛函分析Functional Analysis
                        <br>　　矩陣分析Matrix Analysis
                        <br>　　數位學習E-Learning
                        <br>　　翻轉學習Flipped Learning
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <b>課程簡介</b>
                <p class = "info">本課程透過生活經驗導入不同面向的數學概念，並介紹對應的歷史典故與重要人物，亦藉由趣味多元的觀點展示進階的數學知識，提升學習者數學素養，最後將針對原先設定的問題提供有效的解決策略，使數學思維與涵養融入日常生活之中。  </p>
                <b>課程目標</b>
                <p class = "info">本課程期望能達成下列教育目標： 
                    <br>1. 具備對生活周遭深刻體驗與觀察的能力，並藉此發現問題。 
                    <br>2. 運用數理的思維，將身邊觀察到的現象或遭遇的問題轉化為數學的模型。 
                    <br>3. 使用基礎的數學符號與語言表達意見，與他人溝通交流。 
                    <br>4. 認識基本的數學概念與知識。 
                    <br>5. 養成自主學習的習慣。 
                    <br>6. 培養主動發現並解決問題的能力。</p>
                <b>適用對象</b>
                <p class = "info">1. 國高中生以及大學生 
                    <br>2. 對數學科普知識有興趣的一般民眾 
                    <br>3. 有意或正在從事幼兒、國高中小以及補教業等教育工作的相關人員 
                    <br>4. 家中有就學子女的家長</p>
                <b>先備知識</b>
                <p class = "info">具備國中程度的數學知識，若曾經或正在修習高中數學科目者更佳。</p>
                <b>學習時數</b>
                <p class = "info">2 小時/週</p>
                <b>影片字幕</b>
                <p class = "info">中文</p>
                <b>授課語言</b>
                <p class = "info">中文</p>
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