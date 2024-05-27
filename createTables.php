<?php
include 'dbconnector.php';

//CREATING TABLE

$user = "CREATE TABLE user(
    userID INT(50) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(75),
    username VARCHAR(100) NOT NULL, 
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    age INT(50),
    userpassword VARCHAR(75),
    date_registered DATE
    )";

if ($conn->query($user) === TRUE){
    echo "<br> User table created successfully"; 
} else {
    echo "<br> Error creating table: " . $conn->error;
}

$admin = "CREATE TABLE admin_user(
    email VARCHAR(75) PRIMARY KEY NOT NULL,
    admin_userID INT,
    FOREIGN KEY (admin_userID) REFERENCES user(userID)
    )";

if ($conn->query($admin) === TRUE){
    echo "<br> Admin table created successfully"; 
} else {
    echo "<br> Error creating table: " . $conn->error;
}

$location = "CREATE TABLE establishmentLocation(
    loc_ID INT(10) PRIMARY KEY AUTO_INCREMENT,
    loc_name VARCHAR(50),
    loc_address VARCHAR(100),
    contact_no INT(13),
    business_owner_ID VARCHAR(30)
    )";

if ($conn->query($location) === TRUE){
    echo "<br> Location table created successfully"; 
} else {
    echo "<br> Error creating table: " . $conn->error;
}


$restaurant = "CREATE TABLE restaurant(
    restaurantID INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    resto_name VARCHAR(50),
    loc_id INT,
    FOREIGN KEY (loc_id) REFERENCES establishmentLocation(loc_id)
    )";

if ($conn->query($restaurant) === TRUE){
    echo "<br> Restaurant table created successfully"; 
} else {
    echo "<br> Error creating table: " . $conn->error;
}


$boarding_house = "CREATE TABLE boarding_house(
    bhouseID INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    bhouse_name VARCHAR(50),
    loc_id INT,
    FOREIGN KEY (loc_id) REFERENCES establishmentLocation(loc_id)
    )";

if ($conn->query($boarding_house) === TRUE){
    echo "<br> bhouse table created successfully"; 
} else {
    echo "<br> Error creating bhouse table: " . $conn->error;
}

$general_store = "CREATE TABLE general_store(
    g_storeID INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    gstore_name VARCHAR(50),
    loc_id INT,
    FOREIGN KEY (loc_id) REFERENCES establishmentLocation(loc_id)
    )";

if ($conn->query($general_store) === TRUE){
    echo "<br> General Store table created successfully"; 
} else {
    echo "<br> Error creating general store table: " . $conn->error;
}

$conn->close();
?>