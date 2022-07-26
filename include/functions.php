<?php

include_once('include/initialize.php'); 
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

function getCategories(){
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
    
    return $expenses;
    
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

    function EditExpense($ExpenseId, $newAmount, $newCategory){ 

    $update = dbQuery(
        "
        Update Expenses
        SET Amount=$newAmount, Category=$newCategory
        WHERE ExpenseId= $ExpenseId
        "
    )->fetch();
}


    Function expenseTotal(){

        $total = dbQuery(
            " 
        SELECT Category.Name, Category.Budget,
        SUM(Expenses.Amount) as Total
        FROM Category,Expenses
        WHERE Category.CategoryId = Expenses.CategoryId
        GROUP BY Category.Name, Category.Budget
"
        )->fetchAll();

        return $total;
    }
    Function tableQuery(){

        $total = dbQuery(
            " 
            SELECT Category.Name, Category.Budget,
            Expenses.Amount as Amount, Expenses.DateCreated as DateCreated, Expenses.ExpenseId as ExpenseId
            FROM Category,Expenses
            WHERE Category.CategoryId = Expenses.CategoryId
            GROUP BY Category.Name, Category.Budget, Expenses.Amount, Expenses.DateCreated, Expenses.ExpenseId
"
        )->fetchAll();

        return $total;
    }


