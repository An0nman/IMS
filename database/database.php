<?php
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = "";     // default password for XAMPP is empty
$dbname = "inventoryms_database"; // change this to your database name

// --Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// --Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// --Close the connection when done
// --$conn->close();

// code used by life beyond code
//connection to database

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    // set the PDO error mode to exception.
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    $error_message = $e->getMessage();
}

