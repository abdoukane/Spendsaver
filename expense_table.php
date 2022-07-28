<?php

include_once('include/initialize.php'); 
checkUser();
var_dump($_SESSION['UserId']);
getHeader();
getFooter();
$getExpenses= tableQuery();

echo"
<link rel='stylesheet' href='expense_table.css'>
";

if(isset($_REQUEST['ExpenseId'])) {
    header("Location:expense_table.php ");
    $ExpenseId = $_REQUEST['ExpenseId'];
   $deleteExpense = deleteExpense($ExpenseId);
   return $deleteExpense;

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

