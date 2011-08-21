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
      <?php $active_item = 1; ?>
      <?php include "partials/sidebar.php" ?>
      <div id="content">
        <h1>Tabs</h1>

        <ul class="query-tabs">
          <li class="first selected"><a href="#"><span>Tab 1</span></a></li>
          <li><a href="#"><span>Tab 2</span></a></li>
          <li><a href="#"><span>Tab 3</span></a></li>
          <li><a href="#"><span>Tab 4</span></a></li>
          <li><a href="#"><span>Tab 5</span></a></li>
          <li><a href="#"><span>Tab 6</span></a></li>
          <li class="last"><a href="#"><span>Tab 7</span></a></li>
        </ul>
        <script>
          $(".query-tabs li").each(function(i, elt) {
            $(this).click(function(){
              $("#form fieldset").hide();
              $("#form fieldset:nth(" + i + ")").show();
              $(this).siblings().removeClass('selected');
              $(this).addClass('selected');
            });
          });
        </script>

        <div class="query-container">
          <div class="query-summary">
            <h3>Side pane</h3>
            <div class="query-summary-content">
              <dl>
                <dt>Item 1</dt>
                  <dd>Item 1 Description</dd>

                <dt>Item 2</dt>
                  <dd>Item 2 Description</dd>
              </dl>
            </div>
          </div>
        <form action="#" method="post" id="form">
          <fieldset>
            <div class="row">
              <label>Form label</label>

              <input type="checkbox" name="abonelik_tipi" value="1">
              <span>Option 1</span>

              <input type="checkbox" name="abonelik_tipi" value="2">
              <span>Option 2</span>
            </div>
          </fieldset>

          <!-- Tab 2 -->
          <fieldset style="display:none">
            <div class="row">
              <label>Label</label>

              <input type="checkbox" value="1">
              <span>A</span>

              <input type="checkbox" value="2">
              <span>B</span>
            </div>
            <div class="row">
              <label>Range</label>
              <select>
                <?php for($i = 18; $i < 40; $i++): ?>
                <option value="<?php echo  $i ?>"><?php echo  $i ?></option>
                <?php endfor ?>
              </select>
              -
              <select name="age_max">
                <?php for($i = 40; $i < 60; $i++): ?>
                <option value="<?php echo  $i ?>"><?php echo  $i ?></option>
                <?php endfor ?>
              </select>
            </div>
            <div class="row">
              <label>List</label>
              <div id="list-1-container" class="select-drop clearfix">
                <select class="candidate-list" size="2">
                  <?php for($i = 1; $i <= 30; $i++): ?>
                    <option value="<?php echo  $i ?>">Item <?php echo  $i ?></option>
                  <?php endfor ?>
                </select>
                <div class="select-drop-buttons">
                  <a href="#" class="add">&nbsp;</a>
                  <a href="#" class="remove">&nbsp;</a>
                </div>
                <select name="list-1" class="selected-list" size="2">
                </select>
              </div>
              <script>
              hb.decorateCarryList("#list-1-container");
              </script>
            </div>
          </fieldset>

          <fieldset style="display:none">
            Tab 3
          </fieldset>

          <fieldset style="display:none">
            Tab 4
          </fieldset>

          <fieldset style="display:none">
            Tab 5
          </fieldset>

          <fieldset style="display:none">
            Tab 6
          </fieldset>

          <fieldset style="display:none">
            Tab 7
          </fieldset>
        </form>
        </div>
      </div>
    </div>
    <?php include "partials/footer.php" ?>
  </div>
</body>
</html>
