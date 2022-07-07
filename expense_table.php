<?php

include_once('include/initialize.php'); 

$getExpenses= getExpenses();
//$deleteExpense = deleteExpense();


if(isset($_REQUEST['ExpenseId'])) {
    $ExpenseId = $_REQUEST['ExpenseId'];
   $deleteExpense = deleteExpense($ExpenseId);
   return $deleteExpense;

    location.reload();
}

echo"
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
    <td>Cat name</td>
    <td>$index[Amount]</td>
    <td>$index[DateCreated] </td>
    <td> 
        <a href='?ExpenseId=$index[ExpenseId]'>delete</a>
        <a href='#'>edit</a>
    </td>
</tr>
   

";
    
}




