<!doctype html>
<html>
<head>
  <?php include "partials/head.php" ?>
</head>
<body class="login">
  <div class="wrapper">
    <div class="container">
      <h1>Admin Site Template</h1>
      <div class="content clearfix">
        <h2>Enter your credentials</h2>
        <form action="tables.php" method="get">
          <p>
            <label for="id_username">Username</label>
            <input name="username" id="id_username" class="text">
          </p>
          <p>
            <label for="id_password">Password</label>
            <input name="password" id="id_password" type="password" class="text">
          </p>
          <p class="login-buttons clearfix">
            <input type="submit" class="sbutton ssimple swhite" value="Log in">
          </p>
        </form>
        <p>Hint: Just click to "Log in".</p>
      </div>
    </div>
  </div>
  <script>
  $("input.text").focus(function(){
    $(this).addClass('focus');
  }).blur(function(){
    $(this).removeClass('focus');
  });
  $("#id_username").focus();
  </script>
</body>
</html>