<?php

function getExpenses(){

$expenses = dbQuery(
    " 
    SELECT *

    FROM Expenses

    ORDER BY DateCreated DESC

    "
)->fetchAll();

return $expenses;

}





function getExpense(){

    $expenses = dbQuery(
        " 
        SELECT *
    
        FROM Expenses
    
    
        "
    )->fetch();
    
    return $expense;
    
    }