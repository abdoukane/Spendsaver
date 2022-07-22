<?php

include_once('include/initialize.php'); 

$getExpenses= tableQuery();
//$deleteExpense = deleteExpense();


if(isset($_REQUEST['ExpenseId'])) {
    $ExpenseId = $_REQUEST['ExpenseId'];
   $deleteExpense = deleteExpense($ExpenseId);
   return $deleteExpense;

   header("Refresh:0");

}

// if(isset($_REQUEST['ExpenseId'])) {
//     $getCategories= getCategories();
//     $ExpenseId = $_REQUEST['ExpenseId'];
//     $new = 1;
//     echo"
//     <form method = 'post' action=''>
    
//     Category: <select name= 'CategoryId' id= 'categories'>
//                 <optgroup label = 'Categories'>
//                 ";   
               
//                 foreach($getCategories as $index){
             
//     echo"
               
//                 <option value = $index[CategoryId]>$index[Name]</option>
//                 ";
//      }
//      echo"
//                 </optgroup>
//                 </select>
//     <br />
    
//     Amount:<input type = 'text' name='Amount' />
//     <input type = 'submit' name='$new'/>
//     </form>
//     ";
//      $update = dbQuery(
//         "
//         Update Expenses
//         SET Amount= $newAmount, Category=
//         WHERE ExpenseId = $ExpenseId
//         "
//     )->fetchAll();
  
   
// }

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
    <td>$index[Name]</td>
    <td>$index[Amount]</td>
    <td>$index[DateCreated] </td>
    <td> 
        <a href='?ExpenseId=$index[ExpenseId]'>delete</a>
        <a href='?ExpenseId=$index[ExpenseId]'>edit</a>
    </td>
</tr>
   

";
    
}




