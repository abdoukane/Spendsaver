<?php
include_once('include/initialize.php'); 
getHeader();



$meterData = [
	123 => [
		'monthlyBudget' => 400,
		'currentSpend' => 250
	],
	567 => [
		'monthlyBudget' => 750,
		'currentSpend' => 100
	]
];
$getExpenses= getExpenses();
echo"


<div class='shell'>
<h1>CATEGORY</h1>
    <div class='meteroutline'>
    <div class='percentfilled'>80%</div>
    </div>
   </div>


    <style>

    .meteroutline{  
        background-color: #505050;
        position: absolute;
        width: 100%;
        border-radius: 20px;
       
    }
.shell{  
    background-color: #272727;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    width: 25%;
    border-radius: 20px;
   
}

.percentfilled{
    background-color: #FF652F;
    color: white;
    padding:10px;
    text-align:right;
    border-radius: 20px;
    width:70%;
}
    </style>




";

getFooter();
