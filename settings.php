<?php
include_once('include/initialize.php'); 
checkUser();;

getHeader();
getFooter();
echo"
<link rel='stylesheet' href='main.css'>
";

echo"
<div class = 'container'>
<div class = 'logout'>

<h2><a href='login.php'>LOG OUT</a></h2>

</div>
</div>
";