<?php
    include 'dbconnector.php';

    $loctype = $_POST['loctype'];
    $locname = $_POST['locname'];
    $address = $_POST['address'];
    $owner = $_SESSION['userID'];
    $contact = $_POST['contactno'];
    
    $duplicate = "SELECT * FROM establishmentlocation WHERE loc_name = '$locname'";
    $duplicate_result = $conn->query($duplicate);

    //CHECKING FOR DUPLICATES
    if ($duplicate_result->num_rows > 0) {
        echo '<script type="text/javascript">
        window.onload = function() { alert("Location already in the database"); } 
        </script>';
        header('refresh:0; url=addLocation.html');
    } else {
        $last_loc_id = $conn->insert_id;
        $location_conn = "INSERT INTO establishmentlocation (loc_ID,loc_type,loc_name,loc_address,contact_no,business_owner_ID)
            VALUES ('$last_loc_id','$loctype','$locname','$address','$contact', '$owner')";
        if($conn->query($location_conn)){
            echo 'location inserted successfully<br>';
            switch($loctype){
                case 'Restaurant':
                    $restaurant_conn = "INSERT INTO restaurant (resto_name, loc_id)
                        SELECT '$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";

                    if($conn->query($restaurant_conn)){
                        echo '<script type="text/javascript">
                        window.onload = function() { alert("Restaruant inserted successfully"); } 
                        </script>';
                    }
                    break;
                case 'Boarding House':
                    $bhouse_conn = "INSERT INTO boarding_house (bhouse_name, loc_id)
                        SELECT '$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";
                    if($conn->query($bhouse_conn)){
                        echo '<script type="text/javascript">
                        window.onload = function() { alert("Boarding House inserted successfully"); } 
                        </script>';
                    }
                    break;

                case 'General Store':
                    $store_conn = "INSERT INTO general_store (gstore_name, loc_id)
                        SELECT '$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";

                    if($conn->query($store_conn)){
                        echo '<script type="text/javascript">
                        window.onload = function() { alert("General Store inserted successfully"); } 
                        </script>';
                    }
                    break;
                default:
                    echo 'Invalid location type';
                    break;
            }
        } else {
            echo "<br> Error inserting to database: " . $conn->error;
        }
        
    }

    echo "<a href='home.php'>Return Home</a>";
?>