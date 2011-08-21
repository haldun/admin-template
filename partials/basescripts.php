<script>
$(function(){
  // Mark the row as selected  
  $('input[type=checkbox]').click(function(){
    if ($(this).attr('checked')) {
      $(this).parents("tr:first").addClass('selected');
    } else {
      $(this).parents("tr:first").removeClass('selected');
    }
  });  
});
</script>
