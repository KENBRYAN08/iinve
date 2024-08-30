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

$sql = "SELECT * FROM suppliers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['contact_name']}</td>
                <td>{$row['contact_email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>
                    <button onclick=\"editSupplier('{$row['id']}', '{$row['name']}', '{$row['contact_name']}', '{$row['contact_email']}', '{$row['phone']}', '{$row['address']}')\">Edit</button>
                    <a href='delete_supplier.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No suppliers found</td></tr>";
}

$conn->close();
?>