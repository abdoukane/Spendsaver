<?php

include_once('include/initialize.php'); 

$expenses = dbQuery(
    " SELECT Amount FROM Expenses "
);

echo $expenses;
