<?php
include_once('include/initialize.php'); 

$errors=[];

if(isset($_REQUEST['Category'])){
    if(!isset($_REQUEST['Name']) || $_REQUEST['Name'] ==''){
        $errors['Name']='Required';
    } 
    if(!isset($_REQUEST['Budget']) || $_REQUEST['Budget'] ==''){
        $errors['Budget']='Required';
    }

    if(sizeof($errors)==0){
dbQuery("
        INSERT INTO Category(Name, Budget, UserId, SortOrder)
        VALUES('$_REQUEST[Name]', '$_REQUEST[Budget]','$_SESSION[UserId]', '1')
");

header("location:?");
die("the form was submitted");
    }
}

echo"
<form method = 'post' action=''>

Category Name: <input type = 'text' name='Name' />
<br />

Budget:<input type = 'text' name='Budget' />

<br/><br />
<input type = 'submit' name='Category'/>
</form>
";


$errors=[];

if(isset($_REQUEST['Expenses'])){
    if(!isset($_REQUEST['CategoryId']) || $_REQUEST['CategoryId'] ==''){
        $errors['CategoryId']='Required';
    } 
    if(!isset($_REQUEST['Amount']) || $_REQUEST['Amount'] ==''){
        $errors['Amount']='Required';
    }

    if(sizeof($errors)==0){
dbQuery("
        INSERT INTO Expenses(CategoryId, Amount)
        VALUES('$_REQUEST[CategoryId]', '$_REQUEST[Amount]')
");

header("location:?");
die("the form was submitted");
    }
}

echo"
<form method = 'post' action=''>

Category(change to dropdown): <input type = 'text' name='CategoryId' />
<br />

Amount:<input type = 'text' name='Amount' />

<br/><br />
<input type = 'submit' name='Expenses'/>
</form>
";



