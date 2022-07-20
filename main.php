
 <?php

include_once('include/initialize.php'); 
$getExpenses= getExpenses();
//var_dump($getExpenses);
getHeader();

echo"
<div class= 'container'>
    <div class = 'form'>
        <h1 class = 'formtext'> FORM GOES HERE </h1>
    </div>  
  <div class = 'expenselist'>
   
  "; 
  ?>
  <?php
  
        echo" 
     </div>
      <div class = 'possiblemeters'>
     </div>

 </div>  ";

getFooter();


