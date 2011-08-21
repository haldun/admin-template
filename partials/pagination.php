<ul class="pagination clearfix">
  <?php $selected = 4 ?>
  <?php for ($i = 1; $i <= 10; $i++): ?>
  <li <?php if ($selected == $i): ?>class="selected"<?php endif ?>>
    <a href="#"><span><?php echo $i ?></span></a>
  </li>
  <?php endfor; ?>
</ul>
