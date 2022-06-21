<?php
include_once('include/initialize.php'); 
getHeader();
echo"


<div class='shell'>
<h1>CATEGORY</h1>
    <div class='percentfilled'>80%</div>
    </div>


    <style>

.shell{  
    background-color: #505050;
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
    width:60%;
}
    </style>




";

getFooter();
