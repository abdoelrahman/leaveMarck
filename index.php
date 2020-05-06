<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/database/db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>اترك اثر</title>

  <!-- Bootstrap core CSS -->
  <lin rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo $css_c; ?>bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $css_c; ?>bootstrap-rtl.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $css_c; ?>header.css">
  <link rel="stylesheet" href="<?php echo $css_c; ?>main.css">
  <link rel="stylesheet" href="<?php echo $css_c; ?>footer.css">
</head>

<body>

  <div class="navbar-wrapper">

    <div class="container ">
      <!-- /////////////nav -->
      <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
      <div id="myCarousel" class="carousel slide" style="margin-bottom: 60px;" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="  height: 500px;  background-color: #777;">
          <div class="item active">
            <img src="img/image_2.png" alt="Chania">
            <div class="carousel-caption">


            </div>
          </div>

          <div class="item" style="  height: 500px;  background-color: #777;">
            <img src="img/image_3.png" alt="Chicago">
            <div class="carousel-caption">
              <div class="col-md-12 text-center">
                <h2>
                  <span class="wh">اهلا بك في  <strong>اترك اثر</strong></span>
                </h2>
                <br>
                <h3>
                  <span class="wh">معا لتحقيق اكثر استفاده ...... انضم الينا </span>
                </h3>
                <br>
                <?php if(!isset($_SESSION['id'])): ?>
                  <div class="">
                    <a class="btn btn-theme btn-sm btn-min-block" href="signup.php">تسجيل دخول</a><a class="btn btn-theme btn-sm btn-min-block" href="login.php">تسجسل حساب</a>
                  </div>
                <?php endif; ?>
                  <hr>
              </div>

              <hr>
            </div>
          </div>

          <div class="item" style="  height: 500px;  background-color: #777;">
            <img src="img/image_1.png" alt="New York">
            <div class="carousel-caption">
              <div class="col-md-12 text-center">
                <h2>
                  <span class="wh">لا تجعل خجلك يحرمك من متعــة مساعدة الآخريــن .. عندما تقرر لا تفكــر</span>
                </h2>
                <br>

                <br>

              </div>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- consal/////////////////////////////////////// -->
      <div class="container">
        <h1 class="text-center" style="color:#666;">الاقسام</h1>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c1.jpg	);" class="image-grid-cover">
              <a href="sections.html" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper">كتب</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c0.jpg	);" class="entry-cover image-grid-cover has-image">
              <a href="" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper">تسجيل</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c2.jpg	);" class="entry-cover image-grid-cover has-image">
              <a href="sections.html" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper"> الاثاث</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c3.jpg);" class="entry-cover image-grid-cover has-image">
              <a href="sections.html" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper">الملابس</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c4.jpg	);" class="entry-cover image-grid-cover has-image">
              <a href="sections.html" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper">الادويه</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(img/c5.jpg	);" class="entry-cover image-grid-cover has-image">
              <a href="sections.html" class="image-grid-clickbox"></a>
              <a href="#" class="cover-wrapper">الكترونيات وأجهزة منزلية </a>
            </div>
          </div>
        </div>
      </div>




      <!-- ///////////////////////////////////// -->

      <!-- /////////////////////////////////////// post-->
      <div class="page-header">
        <h1 style="color:#666;text-align: center;">اخر المنشورات</h1>
      </div>
      <div class=" mar">
        <div class="row ls">
          <div class="col-xs-12 col-md-12 col-centered ">

            <div id="carousel" class="carousel slide " data-ride="carousel" data-type="multi" data-interval="2500">
              <div class="carousel-inner ls">
                <div class="item active">
                  <div class="carousel-col">
                    <div class="block yellow img-responsive"><img class="logo" src="img/p1.jpg" style="width:100%;height:100%;"></div>
                    <h4 class="card-title">ثلاثية غرناطه</h4>
                    <i class="	glyphicon glyphicon-user"></i><a> عبدالرحمن</a>
                    <p class="card-text">للبيع شقة ارضي بحديقة خاصة بكمبوند بانوراما الشروق خلف الشروق 2000 دقيقة من طريق الشروق الرئيسى سور الكمباوند عبارة عن مول فيه كل الخدمات</p>
                    <p class="card-text"><i class="fa fa-clock-o"></i><small class="text-muted">2012/2</small></p>
                    <button type="button" class="btn btn-default btn-disable"><a href='product.html'>عرض</a></button>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-col">
                    <div class="block yellow img-responsive"><img class="logo" src="img/p0.jpg" style="width:100%;height:100%;"></div>
                    <h4 class="card-title">ثلاثية غرناطه</h4>
                    <i class="	glyphicon glyphicon-user"></i><a> عبدالرحمن</a>
                    <p class="card-text">
                      <p class="card-text">للبيع شقة ارضي بحديقة خاصة بكمبوند بانوراما الشروق خلف الشروق 2000 دقيقة من طريق الشروق الرئيسى سور الكمباوند عبارة عن مول فيه كل الخدمات</p>
                      <p class="card-text"><i class="fa fa-clock-o"></i><small class="text-muted">2012/2</small></p>
                      <button type="button" class="btn btn-default btn-disable"><a href='product.html'>عرض</a></button>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-col">
                    <div class="block yellow img-responsive"><img class="logo" src="img/p2.jpg" style="width:100%;height:100%;"></div>
                    <h4 class="card-title">ثلاثية غرناطه</h4>
                    <i class="	glyphicon glyphicon-user"></i><a> عبدالرحمن</a>
                    <p class="card-text">للبيع شقة ارضي بحديقة خاصة بكمبوند بانوراما الشروق خلف الشروق 2000 دقيقة من طريق الشروق الرئيسى سور الكمباوند عبارة عن مول فيه كل الخدمات</p>
                    <p class="card-text"><i class="fa fa-clock-o"></i><small class="text-muted">2012/2</small></p>
                    <button type="button" class="btn btn-default btn-disable"><a href='product.html'>عرض</a></button>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-col">
                    <div class="block yellow img-responsive"><img class="logo" src="img/p2.jpg" style="width:100%;height:100%;"></div>
                    <h4 class="card-title">ثلاثية غرناطه</h4>
                    <i class="	glyphicon glyphicon-user"></i><a> عبدالرحمن</a>
                    <p class="card-text">للبيع شقة ارضي بحديقة خاصة بكمبوند بانوراما الشروق خلف الشروق 2000 دقيقة من طريق الشروق الرئيسى سور الكمباوند عبارة عن مول فيه كل الخدمات</p>
                    <p class="card-text"><i class="fa fa-clock-o"></i><small class="text-muted">2012/2</small></p>
                    <button type="button" class="btn btn-default btn-disable"><a href='product.html'>عرض</a></button>
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <div class="left carousel-control">
                <a href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
              </div>
              <div class="right carousel-control">
                <a href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>

          <!-- ////////////////////////////////////////////////////////////////////////// -->
          <div class="counter" style="background-image: url(img/c0.jpg); background-repeat: no-repeat;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            <div class="page-header ">
              <h1 style="color:#666;text-align: center;">احصاءيات الموقع</h1>
            </div>
            <div class="container mar">

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="employees ">

                    <p class="counter-count ">879</p>
                    <p class="employee-p">المستخدمين</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="customer">
                    <p class="counter-count">954</p>
                    <p class="customer-p">المعروضات</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="design">
                    <p class="counter-count">1050</p>
                    <p class="design-p">الزيارات</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="order">
                    <p class="counter-count">652</p>
                    <p class="order-p">ساعات الزيارة</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <hr>
        <hr>
      </div>
    </div>

    <!-- footer////////////////// --> -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo $js_c; ?>/jquery.min.js"></script>
    <script src="<?php echo $js_c; ?>/bootstrap.min.js"></script>
    <script src="<?php echo $js_c; ?>/main.js"></script>

</body>

</html>
