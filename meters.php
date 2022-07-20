<?php
include_once('include/initialize.php'); 
getHeader();

$meterData = getExpenses();

$sum = ExpenseTotal();
echo"
<div class = 'container'>
<div class='shell'>

";
echo"
<link rel='stylesheet' href='meters.css'>
";
    foreach($sum as $total){
        
        $name = $total['Name'];
    $percentfilled = ($total['Total']/$total['Budget'])*100;

    echo"
        <h1 style= 'color: #FF652F;'>$name</h1>
        <div class='meteroutline'>
        <div class='percentfilled' style= 'width: $percentfilled%;'>$percentfilled%</div>
        </div>
        ";
 }
echo" 
 </div>
 </div>
";

getFooter();
