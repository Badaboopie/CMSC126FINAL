<?php
    include 'dbconnector.php';

    $sql = "SELECT * FROM establishmentLocation INNER JOIN restaurant ON establishmentLocation.loc_ID = restaurant.loc_id";
    $result = $conn->query($sql);
    echo "<table>".
        "<tr>".
            "<th>Location ID: </th>".
            "<th>Location Type: </th>".
            "<th>Location Name: </th>".
            "<th>Location Address: </th>".
            "<th>Contact Number: </th>".
            "<th>Restaurant Name: </th>".
            "<th>Menu: </th>".
        "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>".
                    "<td>".$row['loc_ID']."</td>".
                    "<td>".$row['loc_type']."</td>".
                    "<td>".$row['loc_name']."</td>".
                    "<td>".$row['loc_address']."</td>".
                    "<td>".$row['contact_no']."</td>".
                    "<td>".$row['resto_name']."</td>".
                    "<td>".$row['menu']."</td>".
                "</tr>";
        }
    echo "</table>";
    $conn->close();
?>
