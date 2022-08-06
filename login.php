<?php
include_once('include/initialize.php');

if(isset($_REQUEST['Submitted'])){
    $Users = getUsers();

    foreach($Users as $User){
    if($_REQUEST['Email'] == $User['Email'] && $_REQUEST['Password'] == $User['Password'] ){
        
        $_SESSION['UserId'] = $User['UserId'];
        header('location:main.php');
        exit();
    }
    }
}
getHeader();
//getFooter();
echo"
<link rel='stylesheet' href='main.css'>
";

echo"
<div class = 'container'>
<div class = 'login'>
<h2>Login!</h2>

";

echo"
<form method = 'post' action=''>

 <input type = 'email' placeholder='Email'name='Email' />
<br />

<input type = 'password' placeholder='Password' name='Password' />

<br/><br />
<input type = 'submit' name='Submitted'/>
</form>
<h4> New User? <a href = 'register.php'</a>Register here!</h2>
</div>
</div>
";



