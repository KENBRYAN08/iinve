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

$id = $_POST['id'];
$name = $_POST['name'];
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

if (empty($id)) {
    // Insert new supplier
    $sql = "INSERT INTO suppliers (name, contact_name, contact_email, phone, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $contact_name, $contact_email, $phone, $address);
} else {
    // Update existing supplier
    $sql = "UPDATE suppliers SET name=?, contact_name=?, contact_email=?, phone=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $contact_name, $contact_email, $phone, $address, $id);
}

if ($stmt->execute()) {
    header("Location: supplier.php"); // Redirect to the main page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>