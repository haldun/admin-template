<?php
function selected($index) {
  global $active_item;
  if ($index == $active_item) {
    return ' class="active"';
  }
  return '';
}
?>
<div id="sidebar">
  <ul>
    <li <?php echo selected(0); ?>>
      <a href="tables.php"><span>Tables</span></a>
    </li>
    <li <?php echo selected(1); ?>>
      <a href="tabs.php"><span>Pill Tabs</span></a>
    </li>
    <li <?php echo selected(2); ?>>
      <a href="panes.php"><span>Panes and tables</span></a>
    </li>
    <li <?php echo selected(5); ?>>
      <a href="simple_form.php"><span>Simple form</span></a>
    </li>
    <li <?php echo selected(7); ?>>
      <a href="empty.php"><span>Empty page</span></a>
    </li>
  </ul>
</div>