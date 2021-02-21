<?php
include_once "include/functions.php";
include_once "include/page.php";

    $id=$_GET['id'];
    $result=detail_page($id);
//    var_dump($result);
?>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $result['title']; ?></title>

    <meta name="keywords" content="<?php echo $result['keywords']; ?>">
    <meta name="description" content="<?php echo $result['description']; ?>">

    <!---css--->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!---css--->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---js--->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---js--->
    <!--JS for animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!---webfont--->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!---webfont--->
</head>
<body>
<!---header--->
<div class="header-section">
    <div class="container">
        <div class="head-bottom">
            <div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                <h1><a href="index.html">Agrox<span>Farming company</span></a></h1>
            </div>
        </div>
    </div>
</div>
<!---header--->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->

<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!---banner--->
<div class="row_color">
    <div class="container row_color">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
    <div class="container m-top">
        <?php echo $result['body']; ?>
    </div>

<!---banner-->
<!---footer--->
<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>درباره ما</h4>
                <ul>
                    <li>
                        تمرکز بر مشتری</li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>عملکردها</li>
                    <li>نوآوری</li>
                    <li>
                        مسئوليت ها</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
                <h4>راه حل ها</h4>
                <ul>
                    <li>
                        مرکز تماس</li>
                    <li>پشتیبانی مشتریان</li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>طرح‌نما </li>
                    <li>
                        وب سلف سرویس</li>
                    <li>معیارهای عملکرد</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
                <h4>کارها</h4>
                <ul>
                    <li>
                        پشتیبانی مشتریان</li>
                    <li>
                        پشتیبانی پلاتین</li>
                    <li>پشتیبانی طلا</li>
                    <li>آموزش</li>
                    <li>کارگاه های آموزشی</li>
                    <li>
                        آموزش آنلاین</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>تماس با ما</h4>
                <p>تهران-شریعتی</p>
                <p>خ ملک کوچه ایرانیاد</p>
                <p>تلفن رایگان: +1 900 448 9990</p>
                <p>
                    تلفن: +1 459 503 7035</p>
                <p>فکس: + 1 304 789 7898</p>
                <a href="mailto:example@mail.com"> example@mail.com</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---footer--->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!--copy-->
<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
<div class="container">
    <div class="social-icons">
        <a href="#"><i class="icon"></i></a>
        <a href="#"><i class="icon1"></i></a>
        <a href="#"><i class="icon2"></i></a>
        <a href="#"><i class="icon3"></i></a>
    </div>
    <p>کلیه حقوق مادی و معنوی برای مجموعه برنامه نویسان محفوظ می باشد <a href="http://barnamenevisan.org/">برنامه نویسان</a></p>
</div>
</div>
<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
