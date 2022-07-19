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

Budget:<input type = 'int' name='Budget' />

<br/><br />
<input type = 'submit' name='Category'/>
</form>
";



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



