<?php if (isset($_SESSION['admin'])): ?>
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>

        <li><a href="../profile/index.html">الصقحه الشخصيه</a></li>
        <li><a href="../Message/index.html">الرسأل</a></li>
        <li><a href="index.html">المنشورات</a></li>
      </ul>
    </div>


<?php else: ?>
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="../profile/index.html"> عجل المعروضات</a></li>
        <li><a href="../Message/index.html">عدل الاقسام</a></li>
        <li><a href="index.html">عدل المستخدمين</a></li>
      </ul>
    </div>
  </div>

<?php endif; ?>
