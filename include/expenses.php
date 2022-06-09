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