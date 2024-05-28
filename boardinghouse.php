<?php
    include 'dbconnector.php';
    $sql = "SELECT * FROM establishmentLocation INNER JOIN boarding_house ON establishmentLocation.loc_ID = boarding_house.loc_id";
    $result = $conn->query($sql);
    echo "<table>".
        "<tr>".
            "<th>Location ID: </th>".
            "<th>Location Type: </th>".
            "<th>Location Name: </th>".
            "<th>Location Address: </th>".
            "<th>Contact Number: </th>".
            "<th>Boarding House Name: </th>".
            "<th>Available Rooms: </th>".
            "<th>Rent: </th>".
        "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>".
                    "<td>".$row['loc_ID']."</td>".
                    "<td>".$row['loc_type']."</td>".
                    "<td>".$row['loc_name']."</td>".
                    "<td>".$row['loc_address']."</td>".
                    "<td>".$row['contact_no']."</td>".
                    "<td>".$row['bhouse_name']."</td>".
                    "<td>".$row['availablrooms']."</td>".
                    "<td>".$row['rent']."</td>".
                "</tr>";
        }
?>