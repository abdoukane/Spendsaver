<?php

include_once('include/initialize.php'); 

function edit
$category = getCategories($_REQUEST['categoryId']);

echo"

<form>
	<input type='text' name='categoryName' value='$category[categoryName]' />
</form>

";