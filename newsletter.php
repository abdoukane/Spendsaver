<?php
include_once("include/initialize.php");
 $errors = [];

if(isset($_REQUEST['NewsletterFormSubmit'])){
   if(!isset($_REQUEST['Name']) || $_REQUEST['Name']==''){
       $errors['Name'] = 'Required';
   }
   if(!isset($_REQUEST['Email']) || $_REQUEST['Email']==''){
    $errors['Email'] = 'Required';
}
   if(sizeof($errors)==0){
    dbQuery("
INSERT INTO newsletter_subscriber(Name, Email)
VALUES('$_REQUEST[Name]', '$_REQUEST[Email]')
"); 

header("location:?");
//die("the form was submitted");
}
}
getHeader();



debugOutput($errors);


echo"
<form method = 'post' action=''>

Name: <input type='text' name='Name' />
<br />
Email: <input type='text' name='Email' />

<br/><br />
<input type = 'submit' name ='NewsletterFormSubmit'/>
</form>
";