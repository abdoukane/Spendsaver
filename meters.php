<?php
include_once('include/initialize.php'); 
getHeader();

$meterData = [
	123 => [
        'category' => 'Food',
		'monthlyBudget' => 400,
		'currentSpend' => 390
	],
	567 => [
        'category' => 'Necessities',
		'monthlyBudget' => 500,
		'currentSpend' => 100
	]
];

echo"
<div class = 'container'>
<div class='shell'>

";
foreach($meterData as $category){
   $name = $category['category'];
$percentfilled = ($category['currentSpend']/$category['monthlyBudget'])*100;
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
    <style>

    .container{
      display: flex;
    }

    .meteroutline{  
        background-color: #505050;
        
        width: 100%;
        border-radius: 20px;
       
     
    }
.shell{  
    display: flex;
    background-color: #272727; 
    
    flex-direction: column;
    
  
    width: 25%;
    border-radius: 20px;
   justify-content: space-evenly;

}

.percentfilled{
    background-color: #FF652F;
    color: white;
    padding:10px;
    text-align:right;
    border-radius: 20px;

}
    </style>




";

getFooter();
