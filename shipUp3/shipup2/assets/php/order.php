<?php
include "connect.php"; // Using database connection file here

if(isset($_POST['submit']))
{
echo "success";
    $txtName = $_POST['txtName'];
    $txtNum = $_POST['txtNum'];
    $txtItem = $_POST['txtItem'];
    $txtEmail = $_POST['txtEmail'];
    $txtPickupAddress = $_POST['txtPickupAddress'];
    $txtPickupNum = $_POST['txtPickupNum'];
    $txtDeliveryAddress = $_POST['txtDeliveryAddress'];



    $insert = mysqli_query($db,"INSERT INTO `orders_project`(`id`, `name`, `phoneNumber`, `Email`, `itemName`, `pickupAddress`, `pickupNumber`, `deliveryAddress` ) VALUES ('', '".$txtName."', '".$txtNum."', '".$txtEmail."', '".$txtItem."', '".$txtPickupAddress."', '".$txtPickupNum."', '".$txtDeliveryAddress."')");
if ($insert) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($db);
}

}

mysqli_close($db); // Close connection
?>