<?php
include 'dbconnector.php';

$deletedID = $_POST['loc_ID'];
$deleteName = $_POST['loc_name'];
$deletetype = $_POST['loc_type'];

switch($deletetype){
    case 'Restaurant':
        echo $deleteName;
        echo $deletedID;
        $delete_type_table = "DELETE FROM restaurant Where resto_name='$deleteName'";
        $result = $conn->query($delete_type_table);
        if (!$result) {
            echo "DELETION FAILED";
        }else{
            echo $deleteID;
            $delete_from_table = "DELETE FROM establishmentLocation Where loc_ID='$deletedID'";
            $conn->query($delete_from_table);
            echo "DELETED SUCCESSFULLY";
        }
        
        break;
    case 'Boarding House':
        echo $deleteName;
        echo $deletedID;
        $delete_type_table = "DELETE FROM boarding_house Where bhouse_name='$deleteName'";
        $result = $conn->query($delete_type_table);
        if (!$result) {
            echo "DELETION FAILED";
        }else{
            echo $deleteID;
            $delete_from_table = "DELETE FROM establishmentLocation Where loc_ID='$deletedID'";
            $conn->query($delete_from_table);
            echo "DELETED SUCCESSFULLY";
        }
        break;

    case 'General Store':
        echo $deleteName;
        echo $deletedID;
        $delete_type_table = "DELETE FROM general_store Where gstore_name='$deleteName'";
        $result = $conn->query($delete_type_table);
        if (!$result) {
            echo "DELETION FAILED";
        }else{
            echo $deleteID;
            $delete_from_table = "DELETE FROM establishmentLocation Where loc_ID = '$deletedID'";
            $conn->query($delete_from_table);
            echo "DELETED SUCCESSFULLY";
        }
        break;
    default:
        echo 'Invalid location type';
        break;
    }

    echo "<a href='home.php'>Return Home</a>";
    header('refresh:1; url=Home.php');
?>
