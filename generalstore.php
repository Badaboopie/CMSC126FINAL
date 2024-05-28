<?php
    include 'dbconnector.php';
    $sql = "SELECT * FROM establishmentLocation WHERE loc_type = 'General Store' INNER JOIN general_store ON establishmentLocation.loc_ID = general_store.loc_ID";
    $result = $conn->query($sql);
    echo "<table>".
        "<tr>".
            "<th>Location ID: </th>".
            "<th>Location Type: </th>".
            "<th>Location Name: </th>".
            "<th>Location Address: </th>".
            "<th>Contact Number: </th>".
            "<th>Store Name: </th>".
            "<th>Products: </th>".
        "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>".
                    "<td>".$row['loc_ID']."</td>".
                    "<td>".$row['loc_type']."</td>".
                    "<td>".$row['loc_name']."</td>".
                    "<td>".$row['loc_address']."</td>".
                    "<td>".$row['contact_no']."</td>".
                    "<td>".$row['gstore_name']."</td>".
                    "<td>".$row['products']."</td>".
                "</tr>";
        }
?>