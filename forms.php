<?php
include_once('include/initialize.php'); 

$errors=[];

if(isset($_REQUEST['UserId'])){
    if(!isset($_REQUEST['Name']) || $_REQUEST['Name'] ==''){
        $errors['Name']='Required';
    } 
    if(!isset($_REQUEST['Budget']) || $_REQUEST['Budget'] ==''){
        $errors['Budget']='Required';
    }

    if(sizeof($errors)==0){
dbQuery("
        INSERT INTO Category(Name, Budget)
        VALUES('$_REQUEST[Name]', '$_REQUEST[Budget]')
");

header("location:?");
die("the form was submitted");
    }
}
getHeader();


echo"
<form method = 'post' action=''>

Category Name: <input type = 'text' name='Name' />
<br />

Budget:<input type = 'text' name='Budget' />

<br/><br />
<input type = 'submit' name='Category'/>
</form>
";