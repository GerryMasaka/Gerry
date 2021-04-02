<?php
include_once 'user.php';    
include_once 'db.php';    
$con = new DBConnector();    
$pdo = $con->connectToDB();
if(isset($_POST['change']))
{
    //change password
    // $email = $_POST['email'];
    $password = $_POST['password'];

    $Pass1= $_POST['password'];  
    $user = new User();
    // $user->setEmail($email);
    $user->setPassword1($password);
    
    echo $user->changePassword($pdo); 


}
?>