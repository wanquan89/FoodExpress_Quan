<?php
include 'core/init.php';
include 'includes/widgets/common_header.php';
?>
<form name='dish' method='POST' action=add_dish_post.php>
dish name:<input type='text' name='name'>
<br />
dish description:<input type='text' name='description'>
<br>
dish price:<input type='text' name='price'>
<br>
<input type='submit' value='Submit'>
</form>
<?php
include 'includes/widgets/common_footer.php';
?>


