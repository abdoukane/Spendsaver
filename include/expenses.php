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

function getCategories($CategoryId){
    $categories = dbQuery(
        "
        SELECT *
        FROM Category
        "
    )->fetchAll();

    return $categories;
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

    function deleteExpense($ExpenseId){
     
    
        $deleteExpense = dbQuery(
            " 
            DELETE 
        
            FROM Expenses

            WHERE ExpenseId = $ExpenseId
        
            "
        )->fetch();
        return $deleteExpense;
    }