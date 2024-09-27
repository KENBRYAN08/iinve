<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM suppliers WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: supplier.php"); // Redirect to the main page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>