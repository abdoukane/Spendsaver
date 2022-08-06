<?php
include_once('include/initialize.php'); 
checkUser();

getHeader();

$meterData = getExpenses();

$sum = expenseTotal();
echo"
<div class = 'container'>
<div class='shell'>

";
echo"
<link rel='stylesheet' href='meters.css'>
";
    foreach($sum as $total){
       // var_dump($total);
        $name = $total['Name'];
    $percentfilled = round((($total['Total']/$total['Budget'])*100),2);

    echo"
        <h1 style= 'color: #FF652F;'>$name</h1>
        <div class='meteroutline' style= width: 100%;>
        <div class='percentfilled' style= 'width: $percentfilled%;'>$percentfilled%</div>
        </div>
        ";
 }
echo" 
 </div>
 </div>
";

getFooter();
