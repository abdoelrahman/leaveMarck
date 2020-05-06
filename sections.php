<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>اترك اثر</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-rtl.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $css_c; ?>/header.css">
  <link rel="stylesheet" href="<?php echo $css_c; ?>/sections.css">
  <link rel="stylesheet" href="<?php echo $css_c; ?>/footer.css">

</head>

<body>
  <div class="container">

    <!-- /////////////////////nav -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /////////////////////nav -->
    <!-- /////////search -->

    <!--end of col-->
    <header class="jumbotron my-4">
      <h1 class="display-3">الكتب</h1>
      <p class="lead">يمكنكم التبرع ومشاركة كتبكم مع جمهور كبير من قراء الكتب العربيةاو الاجنبيه.</p>
      <a href="signup.html" class="btn btn-primary btn-md  "style=" background-color: #ff9f1a;">سجل الان</a>
      <div class="container h-100">

      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="search">
          <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
          <button type="submit" class="btn bt btn-primary btn-sm">البحث</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="product.html">
            <div class="product border">
              <div class="product-img">
                <img src="img/p0.jpg">
              </div>
              <div class="product-block">
                <h4>ثلاثية غرناطة </h4>
                <p>لاثية غرناطة هي ثلاثية روائية تتكون من ثلاث روايات للكاتبة المصرية رضوى عاشور و هم على التوالي: غرناطة - مريمة - الرحيل.</p>
                <div class="rating-block">
                  <h5>تقيم الناشر</h5>
                  <h4 class="bold padding-bottom-7">4.3 <small>/ 5</small></h4>

                </div>
                <ul class="list-inline ">
                  <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                  <li class="list-inline-item"><i class="	glyphicon glyphicon-user"></i><a> abdelrahman</a></li>
                </ul>
              </div>
              <div class="product-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="product.html">
            <div class="product border">
              <div class="product-img">
                <img src="img/p1.jpg">
              </div>
              <div class="product-block">
                <h4>ثلاثية غرناطة </h4>
                <p>لاثية غرناطة هي ثلاثية روائية تتكون من ثلاث روايات للكاتبة المصرية رضوى عاشور و هم على التوالي: غرناطة - مريمة - الرحيل.</p>
                <div class="rating-block">
                  <h5>تقيم الناشر</h5>
                  <h4 class="bold padding-bottom-7">4.3 <small>/ 5</small></h4>

                </div>
                <ul class="list-inline ">
                  <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                  <li class="list-inline-item"><i class="	glyphicon glyphicon-user"></i><a> abdelrahman</a></li>
                </ul>
              </div>
              <div class="product-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="product.html">
            <div class="product border">
              <div class="product-img">
                <img src="img/p2.jpg">
              </div>
              <div class="product-block">
                <h4>ثلاثية غرناطة </h4>
                <p>لاثية غرناطة هي ثلاثية روائية تتكون من ثلاث روايات للكاتبة المصرية رضوى عاشور و هم على التوالي: غرناطة - مريمة - الرحيل.</p>
                <div class="rating-block">
                  <h5>تقيم الناشر</h5>
                  <h4 class="bold padding-bottom-7">4.3 <small>/ 5</small></h4>

                </div>
                <ul class="list-inline ">
                  <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                  <li class="list-inline-item"><i class="	glyphicon glyphicon-user"></i><a> abdelrahman</a></li>
                </ul>
              </div>
              <div class="product-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </a>
      </div>
      <hr>
    </div>
  </div>
  </div>
  </div>

  </div>
  </section>




  <!-- //////////////////pager -->
  <hr>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
  <hr><hr>



  </div>
  </div>
  </section>

  <!-- Page Features -->

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
