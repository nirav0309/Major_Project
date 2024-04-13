<?php
// Database connection parameters
$host = 'localhost'; // Hostname
$username = 'root'; // Database username
$password = ''; // Database password

// Create a connection to the MySQL server
$connection = mysqli_connect($host, $username, $password);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create the 'testing' database
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS testing";

// Create the database or show an error if it fails
if (mysqli_query($connection, $createDatabaseQuery)) {
    // echo "Database 'testing' created or already exists.";
} else {
    echo "Error creating database: " . mysqli_error($connection);
}

// Select the 'testing' database
mysqli_select_db($connection, 'testing');

// Check if the selection was successful
if (!mysqli_select_db($connection, 'testing')) {
    echo "Cannot select the 'testing' database.";
    exit();
}

// Close the MySQL connection
mysqli_close($connection);

// Now, connect to the 'testing' database
$con = mysqli_connect($host, $username, $password, "testing");

// Check if the connection to the 'testing' database was successful
if (mysqli_connect_errno()) {
    echo "Cannot connect to the 'testing' database.";
    exit();
}
