<?php
include_once('include/initialize.php'); 

getHeader();
//getFooter();
echo"
<link rel='stylesheet' href='main.css'>
";

echo"
<div class = 'container'>
<div class = 'login'>
<h2>Register Here!</h2>

";
$errors = [];
if(isset($_REQUEST['User'])){
   header("Location:login.php");
    if(!isset($_REQUEST['Email']) || $_REQUEST['Email'] ==''){
        $errors['Email']='Required';
        var_dump($errors);
        die("the form was not submitted");
    } 
    if(!isset($_REQUEST['Password']) || $_REQUEST['Password'] ==''){
        $errors['Password']='Required';
        var_dump($errors);
        die("the form wasnt submitted");
    }
    if(!isset($_REQUEST['Name']) || $_REQUEST['Name'] ==''){
        $errors['Name']='Required';
        var_dump($errors);
        die("the form wasnt submitted");
    }

    if(sizeof($errors)==0){
dbQuery("
        INSERT INTO User(Name, Email, Password)
        VALUES('$_REQUEST[Name]','$_REQUEST[Email]', '$_REQUEST[Password]')
");


die("<h4>Registered Successfully!</h4>");
sleep(3);

   
    }
}

echo"
<form method = 'post' action=''>

<input type = 'text' placeholder='First Name'name='Name' />
<br />
 <input type = 'text' placeholder='Email'name='Email' />
<br />

<input type = 'password' placeholder='Password' name='Password' />

<br/><br />
<input type = 'submit' name='User'/>
</form>
</div>
</div>
";