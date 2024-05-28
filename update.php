<?php
    include 'dbconnector.php';

    switch ($_POST['loctype']){
        case 'Restaurant':
            $loctype = $_POST['loctype'];
            $locname = $_POST['locname'];
            $address = $_POST['address'];
            $owner = $_SESSION['userID'];
            $contact = $_POST['contactno'];
            break;
        case 'Boarding House':
            break;
        case 'General Store':
            break;
        default:

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
