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
      <?php $active_item = 5; ?>
      <?php include "partials/sidebar.php" ?>
      <div id="content">
        <h1>Simple form</h1>
        <form action="#" method="post">
          <fieldset>
            <legend></legend>
            <p>
              <label for="id_old_password">Old password</label>
              <input type="password" name="old_password" id="id_old_password"
                     class="text">
            </p>
            <p>
              <label for="id_new_password">New password</label>
              <input type="password" name="new_password" id="id_new_password"
                     class="text">
            </p>
            <p>
              <label for="id_new_password2">New password (again)</label>
              <input type="password" name="new_password2" id="id_new_password2"
                     class="text">
            </p>
            <p class="buttons">
              <input type="submit" class="sbutton ssimple sgray"
                     value="Change">
            </p>
          </fieldset>
        </form>
      </div>
    </div>
    <?php include "partials/footer.php" ?>
  </div>
</body>
</html>
