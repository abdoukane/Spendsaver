
            <?php

include_once('include/initialize.php'); 
$getExpenses= getExpenses();
var_dump($getExpenses);
getHeader();
echo"
<div class= 'container'>
    <div class = 'form'>
        <h1 class = 'formtext'> FORM GOES HERE </h1>
    </div>  

    <div class = 'expenselist'>
    
    <h1 class = 'expenses'> $getExpenses</h1>
    
    </div>

    <div class = 'possiblemeters'>
    <h1 class = 'meters'> METERS </h1>
    </div>

</div>  
";
getFooter();


