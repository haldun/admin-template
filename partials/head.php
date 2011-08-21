<meta charset="utf-8">
<title>Admin Site Template</title>
<link rel="stylesheet" href="styles/reset.css">
<link rel="stylesheet" href="styles/site.css">
<!--[if IE]>
<link rel="stylesheet" href="styles/ie.css">
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" href="styles/ie6.css">
<![endif]-->
<link rel="stylesheet" href="buttons/buttons.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.corner.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/hb.js"></script>
<?php include "partials/basescripts.php" ?>
<!--[if IE]>
<script src="js/jquery.corner.js"></script>
<script>
$(function() {
  $("#header").corner();
  $("#mainheader").corner('top');
  $("#content").corner('bottom');
  $("tr").hover(function(){
    $(this).addClass('hover');
  }, function(){
    $(this).removeClass('hover');
  });
});
</script>
<![endif]-->
