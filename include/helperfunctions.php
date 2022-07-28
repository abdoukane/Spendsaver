<?php
include_once('include/initialize.php');
function debugOutput($input){
    echo"<pre>";
    var_dump($input);
    echo"</pre>";
}
function checkUser(){
    if(!isset($_SESSION['UserId'])){
        header('location:login.php');
        exit();
    }
}







