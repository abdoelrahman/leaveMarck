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
        <h2 style="text-align: center;">Manage Posts</h2>
        <?php include(ROOT_PATH ."/app/includes/messages.php") ?>
        <table>
          <thead>
            <th>N</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
            <?php foreach ($posts as $key => $post): ?>
              <tr class="rec">
                <td><?php echo $key+1?></td>
                <td><?php echo $post['title']; ?></td>
                <td>abdo</td>
                <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">Edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id'];?>" class="delete">  Delete  </a></td>
                <?php if ($post['published']): ?>
                  <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unPublish</a></td>

                <?php else: ?>
                   <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publish</a></td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>

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
