<?php   
session_start(); 
include_once 'user.php';    
include_once 'DB.php';    
$con = new DBConnector();    
$pdo = $con->connectToDB();

if(isset($_POST['login']))
{         
    $email = $_POST['email'];        
    $password = $_POST['password'];
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password); 
    $_SESSION["email"] = $_POST["email"];      
    echo $user->login($pdo);

    
} 
?>
