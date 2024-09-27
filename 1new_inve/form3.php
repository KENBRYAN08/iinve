<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Product
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO prroducts (name, price) VALUES (?, ?)");
    $stmt->bind_param("sd", $name, $price);
    $stmt->execute();
    $stmt->close();
}

// Edit Product
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("UPDATE prroducts SET name = ?, price = ? WHERE id = ?");
    $stmt->bind_param("sdi", $name, $price, $id);
    $stmt->execute();
    $stmt->close();
}

// Delete Product
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM prroducts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Clear All Products
if (isset($_POST['clear_all'])) {
    $conn->query("DELETE FROM prroducts");
}

// Fetch Products
$result = $conn->query("SELECT * FROM prroducts");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            background-image: url("image/pic1.jpg");
        }
        #sidebar {
            width: 210px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }
      
        
        #sidebar h2 {
            margin: 0;
            font-size: 24px;
            padding-bottom: 20px;
        }
        #sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            text-align: center;
            border: 2px solid #000;
            border-radius: 8px;
            
        }
        #sidebar a:hover {
            background-color: #575757;
        }
        #content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: black;
            
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left; 
        }
        th {
            background-color: black;
        }
    </style>
</head>
<body>

<div id="sidebar">
        <h2>Inventory System</h2>
        <a href="form2.php">Dashboard</a>
        <a href="index.html" onclick="showHome()">Add Product</a>
        <a href="supplier.php">Supplier</a>
        <a href="form3.php">Products</a>
        <a href="form4.php">Form4</a>
        <a href="form5.php">Form5</a>
        <a href="logout.php">LOGOUT</a>
        <!-- Additional sidebar links can be added here -->
    </div>
 <div id=content>
    <h1>Product Inventory</h1>

<form method="post">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" step="0.01" name="price" placeholder="Product Price" required>
    <button type="submit" name="add">Add Product</button>
</form>

<h2>Existing Products</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <form method="post">
            <td><?php echo $row['id']; ?></td>
            <td><input type="text" name="name" value="<?php echo $row['name']; ?>" required></td>
            <td><input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>" required></td>
            <td>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="edit">Edit</button>
                <button type="submit" name="delete">Delete</button>
            </td>
        </form>
    </tr>
    <?php endwhile; ?>
</table>

<form method="post">
    <button type="submit" name="clear_all">Clear All Products</button>
</form>
    </div>
<?php
$conn->close();
?>
</body>
</html>