<?php
include 'dbconnector.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$admin_result = (isset($_POST['admin']) && $_POST['admin'] === "on")? 'admin': 'basic_user';

echo 'fname: '.$fname.'<br>';
echo 'lname '.$lname.'<br>';
echo 'username '.$username.'<br>';
echo 'age '.$age.'<br>';
echo 'admin? '.$admin_result.'<br>';

$duplicate = "SELECT * FROM user WHERE email = '$email' OR username = '$username'";
$duplicate_result = $conn->query($duplicate);

//CHECKING FOR DUPLICATES
if ($duplicate_result->num_rows > 0) {
    echo '<script type="text/javascript">
    window.onload = function() { alert("Username or Email has already been taken"); } 
    </script>';
    header('refresh:0; url=register.php');

} else {
    $user_conn = "INSERT INTO user (username,email,fname,lname,age, date_registered, userpassword)
        VALUES ('$username', '$email','$fname', '$lname', '$age', (SELECT  CURRENT_TIMESTAMP), '$password')";
    
    //INSERTING TO ADMIN TABLE
    if ($admin_result == 'admin'){
        echo 'working';
        $admin_conn = "INSERT INTO admin_user (email, admin_userID)
            VALUES ('$email', (SELECT MAX(userID) FROM user))";

        if(($conn->query($user_conn))&&($conn->query($admin_conn))){
            echo '<script type="text/javascript">
            window.onload = function() { alert("Data inserted Successfully"); } 
            </script>'; 
        } else {
            echo "<br> Error inserting to database: " . $conn->error;
        }

        //INSERT TO USER
    } elseif ($admin_result == 'basic_user'){
        if($conn->query($user_conn)){
            echo '<script type="text/javascript">
            window.onload = function() { alert("Data inserted Successfully"); } 
            </script>'; 
        } else {
            echo "<br> Error inserting to database: " . $conn->error;
        }
    }
    header('refresh:1; url=Home.php');
}
exit();

?>