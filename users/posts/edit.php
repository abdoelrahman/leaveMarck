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
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">

      <div class="">
        <h2 style="text-align: center;">عدل منشور</h2>

        <form action="create.php" method="post">
          <div class="input-group">
            <label>اسم المعرض</label>
            <input type="text" name="title" class="text-input">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">اختار صوره</label>
            </div>
          </div>
          <div class="input-group">
            <label>وصف المعروض</label>
            <textarea class="text-input" name="body" id="body"></textarea>
          </div>
          <div class="input-group">
            <label>القسم</label>
            <select class="text-input" name="topic">
              <option></option>
              <option>الكتب</option>
              <option>الادويه</option>
              <option>الملابس</option>
              <option>الاثات والادوات</option>
            </select>
          </div>
          <div class="input-group">
            <label>
              <input type="checkbox" name="publish" /> نشر
            </label>
          </div>
          <div class="input-group">
            <button type="submit" name="update-post" class="btn" >عدل </button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo $js_ca; ?>bootstrap.min.js"></script>
  <script src="<?php echo $js_ca; ?>main.js"></script>

</body>

</html>
