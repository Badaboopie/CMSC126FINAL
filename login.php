<?php
include 'dbconnector.php';

if(isset($_POST['submit'])){
    $username_email = $_POST['usernameEmail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username_email' OR email = '$username_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            if ($password == $row["userpassword"]) {
                header('Location:afterlogin.php');

            } else {
                echo '<script> alert("Wrong Password"); </script>';    
            }
        }

    } else {
        echo '<script> alert("User not Registered"); </script>'; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">

        <h1 class="title">Login</h1>
        <table>
            <tr>
                <td>Username or Email: </td>
                <td>
                    <input type="text" name="usernameEmail" id="uname" required>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="password" id="password" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>