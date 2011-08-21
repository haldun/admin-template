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
      <?php $active_item = 2; ?>
      <?php include "partials/sidebar.php" ?>
      <div id="content">
        <h1>Panes and Table</h1>
        <form action="#" method="post">
          <fieldset>
            <legend></legend>
            <p>
              <label for="id_list_name">Text input</label>
              <input name="list_name" id="id_list_name">
            </p>
            <p>
              <label for="id_list_file">File input</label>
              <input name="list_file" id="id_list_file" type="file">
            </p>
            <p class="buttons">
              <input type="submit" class="sbutton ssimple sgray" value="Create">
            </p>
          </fieldset>
        </form>
        <br/>

        <h1>Table</h1>
        <table cellspacing="0" cellpadding="0" class="grid">
          <thead>
            <tr>
              <th>&nbsp;</th>
              <th>Column 1</th>
              <th>Column 2</th>
              <th>Column 3</th>
              <th>Column 4</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i = 1; $i <= 5; $i++): ?>
            <tr <?php echo  ($i % 2) ? '' : 'class="even"'; ?>>
              <td><input type="checkbox" name="list" value="<?php echo  $i ?>"></td>
              <td>row <?php echo  $i ?></td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor
              </td>
              <td class="text-align-right"><?php echo  rand(40000, 89999) ?></td>
              <td class="text-align-right"><?php echo  rand(300, 500) ?></td>
            </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5">
                <div class="left">
                  <a href="#">Show all</a>
                </div>
                <div class="right">
                  <button class="sbutton ssimple sgray">Delete</button>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <?php include "partials/footer.php" ?>
  </div>
</body>
</html>
