<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'] ?? '';

    // Sanitize the input
    $data = $conn->real_escape_string($data);

    // Insert the data into the database
    $sql = "INSERT INTO entries (data) VALUES ('$data')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the dashboard
        header('Location: form2.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>