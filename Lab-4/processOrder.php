<?php
include_once 'user.php';    
include_once 'DB.php';    
$con = new DBConnector();    
$pdo = $con->connectToDB();       
if(isset($_POST['order']))
{   
    
    //echo "$fullName/$email/$city/$password/$path";             
    $food = $_POST['food'];        
    $units = $_POST['units'];        
        
    $user->setfood($food);
    $user->setunits($units);        
      
    echo $user->order($pdo);    
}
?>
