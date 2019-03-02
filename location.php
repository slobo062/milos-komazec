<?php 
  include 'layout/nav-variables.php';
  $title = 'Milos Komazec | Location';
  $page_name = 'Location';
  include 'layout/head.php'; 
?>
<body class="location">
    <div id="wrap">

      <div class="header">
        <div class="brand">
          <?php include 'layout/brand.php'; ?>
        </div>
        <div class="main-nav">
          <?php include 'layout/main-nav.php'; ?>
        </div>
      </div><!--/header-->

      <div class="content-wrap">
        <div class="content">
          <?php include 'layout/content.php'; ?>
        </div><!--/content-->
        <div class="sidebar">
          <?php include 'layout/sidebar.php'; ?>
          </div><!--/sidebar-->
      </div><!--/content-wrap-->
      <div class="footer">
        <?php include 'layout/footer.php';?>
      </div>
      
      </div><!--/wrap-->
  </body>
</html>