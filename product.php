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
  <link rel="stylesheet" href="<?php echo $css_c; ?>/product.css">
</head>

<body>
  <div class="container">

    <!-- /////////////////////nav -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /////////////////////nav -->
    <div class="container">
      <div class="card">
        <div class="container-fliud">
          <div class="wrapper row">
            <div class="preview col-md-6">

              <div class="preview-pic tab-content">
                <div class="tab-pane active" id="pic-1"><img src="img/p2.jpg" /></div>
                <div class="tab-pane" id="pic-2"><img src="img/p1.jpg" /></div>
                <div class="tab-pane" id="pic-3"><img src="img/p0.jpg" /></div>

              </div>
              <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/p2.jpg" /></a></li>
                <li><a data-target="#pic-2" data-toggle="tab"><img src="img/p1.jpg" /></a></li>
                <li><a data-target="#pic-3" data-toggle="tab"><img src="img/p0.jpg" /></a></li>

              </ul>

            </div>
            <div class="details col-md-6">
              <h3 class="product-title">ثلاثية غرناطه</h3>
              <div class="list-inline-item"><i class="	glyphicon glyphicon-user"></i><a> عبدالرحمن</a><div>
              <div class="rating">
                <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <span class="review-no">41 مراجعة</span>
              </div>

              <p class="product-description"> في وحشة سجنك ترى أحبابك أكثر، لأن في الوقت متسعًا، ولأنهم يأتونك حدبا في محنتك، ويتركون لك أن تتملى وجوههم ما شئت وإن طال تأملك ". رواية ثلاثية غرناطة هي ثلاثية روائية تتكون من ثلاث روايات للكاتبة المصرية رضوى عاشور و هم على التوالي : غرناطة مريمة الرحيل و تدور الأحداث في مملكة غرناطة بعد سقوط جميع الممالك الإسلامية في الأندلس، و تبدأ أحداث الثلاثية في عام 1491 و هو العام الذي سقطت فيه غرناطة بإعلان المعاهدة التي تنازل بمقتضاها أبو عبد الله محمد الصغير آخر ملوك غرناطة عن ملكه لملكي قشتالة.</p>
              <h4 class="price">رقم الهاتف: <span>01096544830</span></div>
              <div class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</div>
                <hr>
              <div class="action">
                <a href="admin/message/index.html"><button class="add-to-cart btn btn-default" type="button">مراسلة الناشر</button></a>
                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



    <div class="footer-bottom">
      <p>© Coding Poets | Designed by miu software5</p>
    </div>
  </div>
  <!-- // FOOTER -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo $js_c; ?>/jquery.min.js"></script>
  <script src="<?php echo $js_c; ?>/bootstrap.min.js"></script>
  <script src="<?php echo $js_c; ?>/main.js"></script>

  </body>

  </html>
