<?php
include 'dbconnector.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$age = $_POST['age'];
$admin_result = (isset($_POST['admin']) && $_POST['admin'] === "on")? 'admin': 'basic_user';

echo 'fname: '.$fname.'<br>';
echo 'lname '.$lname.'<br>';
echo 'username '.$username.'<br>';
echo 'age '.$age.'<br>';
echo 'admin? '.$admin_result.'<br>';

$admin_result = ($admin_result == '')? 'admin':
$user_conn = "INSERT INTO user (username,fname,lname,age)
        VALUES ('$username', '$fname', '$lname', '$age')";

if ($admin_result == 'admin'){
    $admin_conn = "INSERT INTO admin_user (userID) SELECT userID FROM user";
    if(($conn->query($user_conn))&&($conn->query($admin_conn))){
        echo '<script type="text/javascript">
        window.onload = function() { alert("Data inserted Successfully"); } 
        </script>'; 
    } else {
        echo "<br> Error inserting to database: " . $conn->error;
    }
} elseif ($admin_result == 'basic_user'){
    if($conn->query($user_conn)){
        echo '<script type="text/javascript">
        window.onload = function() { alert("Data inserted Successfully"); } 
        </script>'; 
    } else {
        echo "<br> Error inserting to database: " . $conn->error;
    }
}

?>