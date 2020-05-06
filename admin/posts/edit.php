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

    <!-- // header -->

  <div class="admin-wrapper clearfix">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">اضافة مستخدم</a>
        <a href="index.php" class="btn btn-sm">عدل </a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Edit Post</h2>
          <?php include( ROOT_PATH . "/app/helpers/formErrors.php"); ?>
        <form action="edit.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="id" value="id"class="text-input">
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $title; ?>"class="text-input">
          </div>
          <div class="input-group">
            <label>Body</label>
            <textarea class="text-input" name="body" id="body"><?php echo $body; ?></textarea>
          </div>
          <div class="input-group">
            <label>Image</label>
            <input type="file" name="image" class="text-input">
          </div>
          <div class="input-group">
            <label>Topic</label>
            <select class="text-input" name="topic_id">
              <option value=""></option>
              <?php foreach ($topics as $key => $topic): ?>
                <?php if (!empty(topic_id) && $topic_id==$topic['id']): ?>

                    <option selected value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                <?php else: ?>
                    <option value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                <?php endif; ?>


              <?php endforeach; ?>
            </select>
          </div>
          <div class="input-group">
            <?php if (empty($published && $published ==0)): ?>
              <label>
                <input type="checkbox" name="published" /> Publish
              </label>
            <?php else: ?>
              <label>
                <input checked type="checkbox" name="published" /> Publish
              </label>

            <?php endif; ?>

          </div>
          <div class="input-group">
            <button type="submit" name="update-post" class="btn" >Update Post</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

  <!-- Custome Scripts -->
  <script src="../../assets/js/scripts.js"></script>

</body>

</html>
