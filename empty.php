<!doctype html>
<html>
<head>
  <?php include "partials/head.php" ?>
</head>
<body class="index">
  <div id="container">
    <?php include "partials/header.php" ?>
    <div id="main" class="clearfix">
      <?php include "partials/mainheader.php" ?>
      <?php $active_item = 7; ?>
      <?php include "partials/sidebar.php" ?>
      <div id="content">
        <h1>Page title</h1>

        This is the content
      </div>
    </div>
    <?php include "partials/footer.php" ?>
  </div>
</body>
</html>
