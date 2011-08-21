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
      <?php $active_item = 0; ?>
      <?php include "partials/sidebar.php" ?>
      <div id="content">
        <h1>Tables</h1>

        <table cellspacing="0" cellpadding="0" class="grid">
          <thead>
            <tr>
              <th>&nbsp;</th>
              <th>Column 1</th>
              <th>Column 2</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i = 1; $i <= 10; $i++): ?>
            <tr <?php echo ($i % 2) ? '' : 'class="even"'; ?>>
              <td><input type="checkbox" name="list" value="<?php echo  $i ?>"></td>
              <td>row <?php echo  $i ?></td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor
              </td>
            </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5">
                <div class="right">
                  <button class="sbutton ssimple sgray">Delete</button>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
        <?php include "partials/pagination.php" ?>
      </div>
    </div>
    <?php include "partials/footer.php" ?>
  </div>
</body>
</html>
