<?php

include_once('include/initialize.php'); 

$category = getCategories($_REQUEST['categoryId']);

echo"

<form>
	<input type='text' name='categoryName' value='$category[categoryName]' />
</form>

";