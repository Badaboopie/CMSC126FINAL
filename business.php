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
            "<a href='Home.php'>Home</a>".
            "</div>";
    }
?>
<div>
    <h2>Owned Businesses</h2>
    <table>
        <td>ID</td>
        <td>Name</td>
        <td>Type</td>
        <td>Adress</td>
        <td>Contact #</td>
        <?php
        $owner = $_SESSION['userID'];

        $own = "SELECT * FROM establishmentlocation WHERE business_owner_ID = $owner";
        $result = $conn->query($own);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {

                echo"<tr>".
                        "<td>".$row['loc_ID']."</td>".
                        "<td>".$row['loc_name']."</td>".
                        "<td>".$row['loc_type']."</td>".
                        "<td>".$row['loc_address']."</td>".
                        "<td>".$row['contact_no']."</td>";

                echo "<td>". 
                    "<form action='deletebusiness.php' method='post'>".
                    "<input type='text' style='display:none;' name='loc_ID' value='".$row["loc_ID"]."'>".
                    "<button type='submit'>Delete</button>".
                    "</form>";
                    "</td>".
                    "</tr>";

            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>
    
</body>
</html>