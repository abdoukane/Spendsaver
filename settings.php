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

<h2><a href='?link=3'>LOG OUT</a></h2>

</div>
</div>
";


// if ($link == true){
//     $link=$_GET['link'];
//     session_destroy();
//     header("Location:login.php ");
// }

if (isset($_GET['link'])){
    $link=$_GET['link'];
    if ($link == '3'){
    session_destroy();
    header('Location:login.php');
}
}