<nav class="navbar navbar-inverse navbar-static-top">

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="logo" src="img/log1.PNG" style="padding: 0 10px 0 0; width:40px;length:30px; display: flex;" alt=""></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">اترك اثر</a></li>
        <?php if(isset($_SESSION['id'])): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">الصفحه الشخصيه <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="sections.php"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="sections.html">الرسأل</a></li>
            <li><a href="sections.html">المنشوراتي</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">الاقسام <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="sections.php">الكتب</a></li>
            <li><a href="sections.html">الاثاث</a></li>
            <li><a href="sections.html">الملابس</a></li>
            <li><a href="sections.html">ادويه طبيه</a></li>
            <li><a href="sections.html">الالكترونات والاجهزة النزليه</a></li>
          </ul>
        </li>
        <li><a href="aboutus.php">عن اترك اثر</a></li>
        <li><a href="<?php echo BASE_URL . '/logout.php'; ?>">
            <span class="glyphicon glyphicon-log-out pull-lift"></span> تسجيل الخروج
          </a></li>
      </ul>

    </div>
  </div>
</nav>
<!-- ///carousel -->
