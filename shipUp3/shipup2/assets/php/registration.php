<?php
include "connect.php";

session_start();
header('location:loginSignup.php');

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'	user_register');

$txtEmail = $_POST['txtEmail'];
$txtPsw = $_POST['txtPsw'];

$s = "select * from user_register where name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{

}else 
{
    $reg= "insert into user_register (email, password) values ('$txtEmail', '$txtPsw')";
    mysqli_query($con, $reg);
    echo"Registration Successful";

}
?>