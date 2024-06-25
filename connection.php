<?php
// Establishing connection to MySQL database
$connection = mysqli_connect("localhost", "root", "");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Selecting the database
$db = mysqli_select_db($connection, 'demo');

// Check if database selection was successful
if (!$db) {
    die("Database selection failed: " . mysqli_error($connection));
}

// echo "Connected successfully and database selected.";
?>
