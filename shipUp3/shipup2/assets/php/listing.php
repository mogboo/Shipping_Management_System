<?php

include "connect.php";

if(isset($_GET['id'])){
$sql = "delete from driver_project where id = '".$_GET['id']."'";
$result = mysql_query($sql);
}

$sql = "select * from driver_project";
$result = mysql_query($sql);
?>
<html>
    <body>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">
            <tr>
                <td>Reference Id</td>
                <td>Driver Name</td>
                <td>Driver Number</td>
                <td>Vehicle Details</td>
                <td>Customer Name</td>
                <td>Customer Address</td>
                <td>Customer Number</td>
                <td colspan = "2">Action</td>
            </tr>
        </table>
    </body>
</html>