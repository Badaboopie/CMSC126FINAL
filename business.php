<?php
include 'dbconnector.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Options</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if (isset($_SESSION['valid'])) {
        echo "<div class='header-container'>".
            "<a href='addLocation.php'>Add a Business</a>".
            "<a href='deletebusiness.php'>Remove Business</a>".
            "</div>";
    }
?>
<div>
    <table>
        <td>ID</td>
        <td>Type</td>
        <td>Name</td>
        <td>Adress</td>
        <td>Contact #</td>
        <td>Owner</td>
        <?php
        $owner = $_SESSION['userID'];

        $own = "SELECT * FROM establishmentlocation WHERE business_owner_ID = $owner";
        $result = $conn->query($own);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {

                echo"<tr>".
                        "<td>".$row['loc_ID']."</td>".
                        "<td>".$row['loc_type']."</td>".
                        "<td>".$row['loc_name']."</td>".
                        "<td>".$row['loc_address']."</td>".
                        "<td>".$row['contact_no']."</td>".
                        "<td>".$row['business_owner_ID']."</td>".
                    "</tr>";
                // echo "<p>ID ".$row['loc_ID']."</p>".
                //     "<p>Type ".$row['loc_type']."</p>".
                //     "<p>Name ".$row['loc_name']."</p>".
                //     "<p>Address ".$row['loc_address']."</p>".
                //     "<p>CN ".$row['contact_no']."</p>".
                //     "<p>Owner".$row['business_owner_ID']."</p>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>
    
</body>
</html>