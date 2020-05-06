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
  <link rel="stylesheet" href="<?php echo $css_ca; ?>css/header.css">
  <link rel="stylesheet" href="<?php echo $css_ca; ?>profile.css">
</head>

<body>

  <div class="container">
    <!-- header -->
    <!-- /////////////nav -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    <div class="admin-wrapper clearfix">
      <!-- Left Sidebar -->
      <<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
      <!-- Admin Content -->
      <div class="admin-content clearfix">

        <div class="">
          <h2 style="text-align: center;">عدل البيانات الشخصيه</h2>

          <form action="create.php" method="post">
            <!-- <div class="msg error">
            <li>Username required</li>
          </div> -->
          <div class="text-center">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="//placehold.it/100" class="img-circle img-responsive"> </div>

              <label> </label>

            <input type="file" class="form-control">
          </div>
            <div class="input-group">
              <label>اسم المستخدم</label>
              <input type="text" name="username" class="text-input">
            </div>
            <div class="input-group">
              <label>الايميل الالكتروني</label>
              <input type="email" name="email" class="text-input">
            </div>
            <div class="input-group">
              <label>رقم الهاتف</label>
              <input type="email" name="email" class="text-input">
            </div>
            <div class="input-group">
              <label>الرقم السري</label>
              <input type="password" name="password" class="text-input">
            </div>
            <div class="input-group">
              <label>اكد الرقم السري</label>
              <input type="password" name="passwordConf" class="text-input">
            </div>

            <div class="input-group">
              <button type="submit" name="save-user" class="btn">عدل البيانات</button>
            </div>
          </form>

        </div>
      </div>
      <!-- // Admin Content -->

    </div>


  </div>


  <!-- JQuery -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo $js_ca; ?>jquery.min.js"></script>
  <script src="<?php echo $js_ca; ?>bootstrap.min.js"></script>
  <script src="<?php echo $js_ca; ?>main.js"></script>

</body>

</html>
