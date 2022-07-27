<?php

include_once('include/initialize.php'); 
getHeader();
getFooter();
$getExpenses= tableQuery();

echo"
<link rel='stylesheet' href='expense_table.css'>
";

if(isset($_REQUEST['ExpenseId'])) {
    $ExpenseId = $_REQUEST['ExpenseId'];
   $deleteExpense = deleteExpense($ExpenseId);
   return $deleteExpense;

   header("Refresh:0");

}

if(isset($_REQUEST['ExpenseId'])) {
    $ExpenseId = $_REQUEST['ExpenseId'];



    $getCategories= getCategories($ExpenseId, $newAmount, $newCategory);
    $ExpenseId = $_REQUEST['ExpenseId'];
    $new = 1;

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
    
    Amount:<input type = 'text' placeholder=  name='Amount' />
    <input type = 'submit' name='$new'/>
    </form>
    ";
     $update = dbQuery(
        "
        Update Expenses
        SET Amount= $newAmount, Category=
        WHERE ExpenseId = $ExpenseId
        "
    )->fetchAll();
  
   
}

echo"
<div class = 'container'>
<div class = 'table'>
<table>
<tr>
    <td>Category</td>
    <td>Amount</td>
    <td>Date</td>
    <td>Delete/Edit</td>
</tr>
";

foreach($getExpenses as $index){
  
     echo" 
<tr>
    <td>$index[Name]</td>
    <td>$index[Amount]</td>
    <td>$index[DateCreated] </td>
    <td> 
        <a href='edit.php?ExpenseId=$index[ExpenseId]'>edit</a>
        /
        <a href='?ExpenseId=$index[ExpenseId]'>delete</a>
    </td>
</tr>
   

";

}
echo"
</div>
</div>
";

