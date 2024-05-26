<!DOCTYPE html>
<html>
    <h2>ADDING LOCATION</h2>
    <body>
        <form action="insert_location.php" method="post">
            <table>
                <tr>
                    <td>Location Name: </td>
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
                    <td>Owner: </td>
                    <td>
                        <input type="text" name="owner" id="uname">
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