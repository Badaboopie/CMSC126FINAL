<?php
    include 'dbconnector.php';

    $loctype = $_POST['loctype'];
    $locname = $_POST['locname'];
    $address = $_POST['address'];
    $owner = $_POST['owner'];
    $contact = $_POST['contactno'];

    echo 'Location Type: '.$loctype.'<br>';
    echo 'Location Name: '.$locname.'<br>';
    echo 'Address: '.$address.'<br>';
    echo 'Owner: '.$owner.'<br>';
    echo 'Contact Number: '.$contact.'<br>';

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
        $location_conn = "INSERT INTO establishmentlocation (loc_ID,loc_name,loc_address,contact_no, business_owner)
            VALUES ('$last_loc_id','$locname','$address','$contact','$owner')";
        if($conn->query($location_conn)){
            echo 'location inserted successfully<br>';
            switch($loctype){
                case 1:
                    $last_restaurantID = $conn->insert_id;
                    $restaurant_conn = "INSERT INTO restaurant (restaurantID,resto_name, loc_id)
                        SELECT '$last_restaurantID','$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";

                    if($conn->query($restaurant_conn)){
                        echo 'restaurant inserted successfully<br>';
                    }
                    break;
                case 2:
                    $last_bhouseID = $conn->insert_id;
                    $bhouse_conn = "INSERT INTO boarding_house (bhouseID,bhouse_name, loc_id)
                        SELECT '$last_bhouseID','$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";
                    if($conn->query($bhouse_conn)){
                        echo 'boarding house inserted successfully<br>';
                    }
                    break;

                case 3:
                    $general_storeID = $conn->insert_id;
                    $store_conn = "INSERT INTO general_store (storeID,store_name, loc_id)
                        SELECT '$general_storeID','$locname', loc_id FROM establishmentlocation WHERE loc_name = '$locname'";

                    if($conn->query($store_conn)){
                        echo 'general store inserted successfully<br>';
                    }
                    break;
                default:
                    break;
            }
        } else {
            echo "<br> Error inserting to database: " . $conn->error;
        }
        
    }
?>