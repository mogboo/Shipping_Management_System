<?php
include "connect.php"; // Using database connection file here

if(isset($_POST['submit']))
{
echo "success";
    $txtId = $_POST['txtId'];
    $txtDName = $_POST['txtDName'];
    $txtDNumber = $_POST['txtDNumber'];
    $txtDriverVehicleandDetails = $_POST['txtDriverVehicleandDetails'];
    $txtCName = $_POST['txtCName'];
    $txtCAddress = $_POST['txtCAddress'];
    $txtCNumber = $_POST['txtCNumber'];



    $insert = mysqli_query($db,"INSERT INTO `driver_project`(`id`, `DriverName`, `DriverNumber`, `DriverVehicleanndDetails`, `CustomerName`, `CustomerAddress`, `CustomerNumber`) VALUES ('', '".$txtDName."', '".$txtDNumber."', '".$txtDriverVehicleandDetails."', '".$txtCName."', '".$txtCAddress."', '".$txtCNumber."')");
if ($insert) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($db);
}

}

mysqli_close($db); // Close connection
?>