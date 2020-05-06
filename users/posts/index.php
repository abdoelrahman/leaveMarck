<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>اترك اثر</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo $css_ca; ?>bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $css_ca; ?>bootstrap-rtl.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $css_ca; ?>header.css">
  <link rel="stylesheet" href="<?php echo $css_ca; ?>profile.css">
</head>

<body>
  <div class="container">
    <!-- /////////////nav -->
    <<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="container">

      <div class="row">
        <div class="col-xs-8">
          <div class="button-group">
            <a href="create.html" class="btn btn-sm">اضافة معروض</a>
            <hr>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title">
                <div class="row">
                  <div class="col-xs-6">
                    <h5> المنشورات</h5>
                  </div>

                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-3"><img class="img-responsive" src="http://placehold.it/100x70">
                </div>
                <div class="col-xs-5">
                  <h4 class="product-name"><strong>اسم المنتج</strong></h4>
                  <h4><small>وصف المنشور</small></h4>
                </div>
                <div class="col-xs-4">
                  <div class="col-xs-4 text-right">
                    <a href="edit.php" class="edit"> عدل </a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#" class="publish">عرض</a>
                  </div>
                  <div class="col-xs-4">
                    <button type="button" class="btn btn-link btn-xs">
                      <span class="glyphicon glyphicon-trash"> </span>
                    </button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3"><img class="img-responsive" src="http://placehold.it/100x70">
                </div>
                <div class="col-xs-5">
                  <h4 class="product-name"><strong>اسم المنتج</strong></h4>
                  <h4><small>وصف المنشور</small></h4>
                </div>
                <div class="col-xs-4">
                  <div class="col-xs-4 text-right">
                    <a href="edit.php" class="edit"> عدل </a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#" class="publish">عرض</a>
                  </div>
                  <div class="col-xs-4">
                    <button type="button" class="btn btn-link btn-xs">
                      <span class="glyphicon glyphicon-trash"> </span>
                    </button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3"><img class="img-responsive" src="http://placehold.it/100x70">
                </div>
                <div class="col-xs-5">
                  <h4 class="product-name"><strong>اسم المنتج</strong></h4>
                  <h4><small>وصف المنشور</small></h4>
                </div>
                <div class="col-xs-4">
                  <div class="col-xs-4 text-right">
                    <a href="edit.php" class="edit"> عدل </a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#" class="publish">عرض</a>
                  </div>
                  <div class="col-xs-4">
                    <button type="button" class="btn btn-link btn-xs">
                      <span class="glyphicon glyphicon-trash"> </span>
                    </button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="text-center">
                  <div class="col-xs-9">
                  </div>
                  <div class="col-xs-3">
                    <button type="button" hclass="btn btn-default btn-sm btn-block">
                      اضاقة معروض
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- JQuery -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo $js_ca; ?>bootstrap.min.js"></script>
  <script src="<?php echo $js_ca; ?>main.js"></script>

</body>

</html>
