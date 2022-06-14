<?php

include_once('include/initialize.php'); 

$getExpense = getExpense();
echo"

<div class= 'container'>

<div class = 'expenselist'>
    
<h1 class = 'expenses'> $getExpenses[Amount]</h1>

</div>

</div>

