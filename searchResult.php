<?php
    include 'dbconnector.php';

    $search = $_POST['search-input'];

    $sql = "SELECT * FROM establishmentLocation WHERE loc_name LIKE '$search%'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<table border='1'>".
                "<tr>".
                "<td>Location ID: </td>".
                "<td>".$row['loc_ID']."</td>".
                "<tr>".
                "<td>Location Type: </td>".
                "<td>".$row['loc_type']."</td>".
                "</tr>".
                "<tr>".
                "<td>Location Name: </td>".
                "<td>".$row['loc_name']."</td>".
                "</tr>".
                "<tr>".
                "<td>Location Address: </td>".
                "<td>".$row['loc_address']."</td>".
                "</tr>".
                "<tr>".
                "<td>Contact Number: </td>".
                "<td>".$row['contact_no']."</td>".
                "</tr>";
            switch($row['loc_type']){
                case 'Restaurant':
                    $restaurant = "SELECT * FROM restaurant WHERE loc_id = ".$row['loc_ID'];
                    $restaurant_result = $conn->query($restaurant);
                    if ($restaurant_result->num_rows > 0) {
                        while($restaurant_row = $restaurant_result->fetch_assoc()) {
                            echo "<tr>".
                                "<td>Restaurant Name: </td>".
                                "<td>".$restaurant_row['resto_name']."</td>".
                                "</tr>";
                        }
                    }
                    break;
                case 'Boarding House':
                    $bhouse = "SELECT * FROM boarding_house WHERE loc_id = ".$row['loc_ID'];
                    $bhouse_result = $conn->query($bhouse);
                    if ($bhouse_result->num_rows > 0) {
                        while($bhouse_row = $bhouse_result->fetch_assoc()) {
                            echo "<tr>".
                                "<td>Boarding House Name: </td>".
                                "<td>".$bhouse_row['bhouse_name']."</td>".
                                "</tr>";
                        }
                    }
                    break;
                case 'General Store':
                    $store = "SELECT * FROM general_store WHERE loc_id = ".$row['loc_ID'];
                    $store_result = $conn->query($store);
                    if ($store_result->num_rows > 0) {
                        while($store_row = $store_result->fetch_assoc()) {
                            echo "<tr>".
                                "<td>Store Name: </td>".
                                "<td>".$store_row['gstore_name']."</td>".
                                "</tr>";
                        }
                    }
                    break;
                default:
                    echo 'Invalid location type';
                    break;
            }
            echo "</table>";
        }
    } else {
        echo "0 results";
    }

    echo "<a href='Home.php'>Home</a>";
?>