<?php

while($row = mysql_fetch_object($result)){


?>
    <tr>
        <td>
            <?php echo $row->id;?>
        </td>
        <td>
            <?php echo $row->DriverName;?>
        </td>
        <td>
            <?php echo $row->DriverNumber;?>
        </td>
        <td>
            <?php echo $row->DriverVehicleanndDetails;?>
        </td>
        <td>
            <?php echo $row->CustomerName;?>
        </td>
        <td>
            <?php echo $row->CustomerAddress;?>
        </td>
        <td>
            <?php echo $row->CustomerNumber;?>
        </td>
        <td> <a href="listing.php?id =
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete
        </a> | <a href="index.php?id =
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit
        </a> </td>
        <tr>
            <? php } ?>