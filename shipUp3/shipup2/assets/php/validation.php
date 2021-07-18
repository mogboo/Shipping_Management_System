<?php

session_start();


$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'	user_register');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from user_register where name = '$name'&& password = '$pass' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location:index.php');
}else 
{
    
    header('location:loginSignup.php');
}
?>