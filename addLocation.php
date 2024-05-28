<?php
include 'dbconnector.php';
?>

<!DOCTYPE html>
<html>
    <h2>ADDING BUSINESS</h2>
    <body>
        <form action="insert_location.php" method="post">
            <table>
                <tr>
                    <td>Location Type: </td>
                    <td><select name="loctype" id="">
                            <option value="Restaurant">Restaurant</option>
                            <option value="Boarding House">Boarding House</option>
                            <option value="General Store">General Store</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Business Name: </td>
                    <td>
                        <input type="text" name="locname" id="locname">
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>
                        <input type="text" name="address" id="lname">        
                    </td>
                </tr>
                <tr>
                    <td>Contact Number: </td>
                    <td>
                        <input type="number" name="contactno" id="cn">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit"><input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>