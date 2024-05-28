<?php
include 'dbconnector.php';

$deletedbusiness = $_POST['loc_ID'];

$genstore = "SELECT * FROM establishmentLocation inner join  general_store on       establishmentLocation.loc_ID = general_store.loc_id";

$bh = "SELECT * FROM establishmentLocation inner join boarding_house on establishmentLocation.loc_ID = boarding_house.loc_id";

$resto = "SELECT * FROM establishmentLocation inner join restaurant on establishmentLocation.loc_ID = restaurant.loc_id";

if ($conn->query($genstore)) {
    $delete = "DELETE FROM $genstore WHERE loc_ID = $deletedbusiness";
    $result = $conn->query($delete);

    if(!$result){
        echo $conn->error;
    }else{
        echo "Successfully Deleted";
    }
}
?>
