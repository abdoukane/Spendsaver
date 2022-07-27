<?php

include_once('include/initialize.php'); 

$ExpenseId = $_GET['ExpenseId'];

$query = dbQuery(
    "
    SELECT *
    FROM Expenses
    where ExpenseId = $ExpenseId
    "
)->fetch();


$errors=[];

if(isset($_REQUEST['Expenses'])){
    if(!isset($_REQUEST['CategoryId']) || $_REQUEST['CategoryId'] == ''){
        $errors['CategoryId']='Required';
        var_dump($errors);
        die("the form was not submitted");
        
    } 
    if(!isset($_REQUEST['Amount']) || $_REQUEST['Amount'] ==''){
        $errors['Amount']='Required';
        die("the form wasnt submitted");
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
 $getCategories= getCategories();
           
echo"
<form method = 'post' action=''>

Category: <select name= 'CategoryId' id= 'categories'>
            <optgroup label = 'Categories'>
            ";   
           
            foreach($getCategories as $index){
         
echo"
           
            <option value = $index[CategoryId]>$index[Name]</option>
            ";
 }
 echo"
            </optgroup>
            </select>
<br />

Amount:<input type = 'text' name='Amount' />

<br/><br />
<input type = 'submit' name='Expenses'/>
</form>
";