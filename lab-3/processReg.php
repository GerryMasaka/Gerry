<?php
include_once 'user.php';    
include_once 'DB.php';    
$con = new DBConnector();    
$pdo = $con->connectToDB();       
if(isset($_POST['submit']))
{   
    $original_file_name = $_FILES['image']['name'];
    //echo "$original_file_name";
    $file_tmp_location = $_FILES['image']['tmp_name'];
    //echo "$file_tmp_location";
    $file_path = "images/";
    $path = $file_path.$original_file_name;
    //echo "$path";

    move_uploaded_file($file_tmp_location, $file_path.$original_file_name);
    $image = $_FILES['image']

    //echo "$fullName/$email/$city/$password/$path";             
    $fullName = $_POST['fullName'];        
    $email = $_POST['email'];        
    $password = $_POST['password'];
    $city = $_POST['city'];
    $image = $_POST['image'];        
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);        
    $user->setFullName($fullName);  
    $user->setCityofResidence($city);
    $user->setImage($image);      
    echo $user->register($pdo);    
}
?>
