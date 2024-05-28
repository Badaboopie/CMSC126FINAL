<?php
    include 'dbconnector.php';

    switch ($_POST['loc_type']){
        case 'Restaurant':
            $locID = $_POST['loc_ID'];
            $loctype = $_POST['loc_type'];
            $locname = $_POST['loc_name'];
            $address = $_POST['loc_address'];
            $contact = $_POST['contact_no'];

            echo "<form action='updateLocation.php' method='post'>".
                "<input type='hidden' name='loc_ID' value='".$locID."'>".
                "<table>".
                    "<tr>".
                        "<td>Location Type: </td>".
                        "<td><select name='loctype' id=''>".
                                "<option value='Restaurant' ";
                                if($loctype == 'Restaurant'){echo "selected";}
                                echo ">Restaurant</option>".
                                "<option value='Boarding House' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">Boarding House</option>".
                                "<option value='General Store' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">General Store</option>".
                            "</select>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Business Name: </td>".
                        "<td>".
                            "<input type='text' name='locname' id='locname' value='".$locname."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Address: </td>".
                        "<td>".
                            "<input type='text' name='address' id='lname' value='".$address."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Contact Number: </td>".
                        "<td>".
                            "<input type='number' name='contactno' id='cn' value='".$contact."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>".
                            "<input type='submit' value='submit'><input type='reset' value='reset'>".
                        "</td>".
                    "</tr>".
                "</table>".
                "</form>";

            break;
        case 'Boarding House':
            $locID = $_POST['loc_ID'];
            $loctype = $_POST['loc_type'];
            $locname = $_POST['loc_name'];
            $address = $_POST['loc_address'];
            $contact = $_POST['contact_no'];

            echo "<form action='updateLocation.php' method='post'>".
                "<input type='hidden' name='loc_ID' value='".$locID."'>".
                "<table>".
                    "<tr>".
                        "<td>Location Type: </td>".
                        "<td><select name='loctype' id=''>".
                                "<option value='Restaurant' ";
                                if($loctype == 'Restaurant'){echo "selected";}
                                echo ">Restaurant</option>".
                                "<option value='Boarding House' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">Boarding House</option>".
                                "<option value='General Store' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">General Store</option>".
                            "</select>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Business Name: </td>".
                        "<td>".
                            "<input type='text' name='locname' id='locname' value='".$locname."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Address: </td>".
                        "<td>".
                            "<input type='text' name='address' id='lname' value='".$address."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Contact Number: </td>".
                        "<td>".
                            "<input type='number' name='contactno' id='cn' value='".$contact."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>".
                            "<input type='submit' value='submit'><input type='reset' value='reset'>".
                        "</td>".
                    "</tr>".
                "</table>".
                "</form>";
            break;
        case 'General Store':
            $locID = $_POST['loc_ID'];
            $loctype = $_POST['loc_type'];
            $locname = $_POST['loc_name'];
            $address = $_POST['loc_address'];
            $contact = $_POST['contact_no'];

            echo "<form action='updateLocation.php' method='post'>".
                "<input type='hidden' name='loc_ID' value='".$locID."'>".
                "<table>".
                    "<tr>".
                        "<td>Location Type: </td>".
                        "<td><select name='loctype' id=''>".
                                "<option value='Restaurant' ";
                                if($loctype == 'Restaurant'){echo "selected";}
                                echo ">Restaurant</option>".
                                "<option value='Boarding House' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">Boarding House</option>".
                                "<option value='General Store' ";
                                if($loctype == 'Boarding House'){echo "selected";}
                                echo ">General Store</option>".
                            "</select>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Business Name: </td>".
                        "<td>".
                            "<input type='text' name='locname' id='locname' value='".$locname."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Address: </td>".
                        "<td>".
                            "<input type='text' name='address' id='lname' value='".$address."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>Contact Number: </td>".
                        "<td>".
                            "<input type='number' name='contactno' id='cn' value='".$contact."'>".
                        "</td>".
                    "</tr>".
                    "<tr>".
                        "<td>".
                            "<input type='submit' value='submit'><input type='reset' value='reset'>".
                        "</td>".
                    "</tr>".
                "</table>".
                "</form>";
            break;
        default:
            echo "Invalid Location Type";
            break;
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
