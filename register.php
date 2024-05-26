<!DOCTYPE html>
<html>
    <h2>REGISTRATION</h2>
    <body>
        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="fname" id="fname">
                    </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="lname" id="lname">        
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="uname" id="uname">
                    </td>
                </tr>
                <tr>
                    <td>Age: </td>
                    <td>
                        <input type="number" name="age" id="age">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="admin">Admin
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