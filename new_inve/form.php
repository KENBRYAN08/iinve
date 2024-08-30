<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$sku = $_POST['sku'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$supplier = $_POST['supplier'];

// SQL query to insert data
$sql = "INSERT INTO pproducts (name, sku, quantity, price, supplier) VALUES ('$name', '$sku', '$quantity', '$price', '$supplier')";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>