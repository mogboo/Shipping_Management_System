<?php
include "connect.php"; // Using database connection file here

if(isset($_POST['submit']))
{
echo "success";
    $txtId = $_POST['txtId'];

    $insert = mysqli_query($dbId,"INSERT INTO `trackingnumber`(`id`, `trackId` ) VALUES ('', '".$txtId."')");
if ($insert) {

} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($db);
}

}

mysqli_close($db); // Close connection
?>