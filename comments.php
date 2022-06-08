<?php
include_once('include/initialize.php'); 

$errors=[];

if(isset($_REQUEST['CommentSubmission'])){
    if(!isset($_REQUEST['Name']) || $_REQUEST['NAME'] ==''){
        $errors['Name']='Required';
    } 
    if(!isset($_REQUEST['Content']) || $_REQUEST['Content'] ==''){
        $errors['Content']='Required';
    }

    if(sizeof($errors)==0){
dbQuery("
        INSERT INTO Comments(Name, Content)
        VALUES('$_REQUEST[Name]', '$_REQUEST[Content]')
");

header("location:?");
die("the form was submitted");
    }
}
getHeader();


echo"
<form method = 'post' action=''>

nickname: <input type = 'text' name='Name' />
<br />

Comment:<input type = 'text' name='Content' />

<br/><br />
<input type = 'submit' name='Comments'/>
</form>
";
