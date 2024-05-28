<?php
    include 'dbconnector.php';

    $loctype = $_POST['loctype'];
    $locname = $_POST['locname'];
    $address = $_POST['address'];
    $contact = $_POST['contactno'];

    $sql = "UPDATE establishmentlocation SET loc_type = '$loctype', loc_name = '$locname', loc_address = '$address', contact_no = '$contact' WHERE loc_ID = ".$_POST['loc_ID'];

    if($conn->query($sql)){
        echo 'location updated successfully<br>';
    } else {
        echo 'location update failed: '.$conn->error.'<br>';
    }
    echo "<a href='home.php'>Return Home</a>";
?>