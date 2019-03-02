<?php 
  include 'layout/nav-variables.php';
  $page_name = 'Contact us';
  $title = 'Milos Komazec | ' . $page_name;
  include 'layout/head.php'; 
?>
<body class="contact-us">
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