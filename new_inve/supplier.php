<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Management</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

body{
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
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

h1, h2 {
    text-align: center;
}

form {
    max-width: 600px;
    margin: 0 auto;
}

label {
    display: block;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    box-sizing: border-box;
}

button {
    margin-top: 20px;
    padding: 10px 15px;
    font-size: 16px;
}

table {
    color: #000;
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: #fff;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
    </style>
</head>
<body>


<div id="sidebar">
        <h2>Inventory System</h2>
        <a href="form2.php">Dashboard</a>
        <a href="index.html" onclick="showHome()">Add Product</a>
        <a href="supplier.php">Supplier</a>
        <a href="form3.php">Form3</a>
        <a href="form4.php">Form4</a>
        <a href="form5.php">Form5</a>
        <a href="logout.php">LOGOUT</a>
        <!-- Additional sidebar links can be added here -->
    </div>

<div id="content">

    <h1>Supplier Management</h1>
    
    <form action="save_supplier.php" method="post">
        <input type="hidden" name="id" id="supplier_id">
        
        <label for="name">Supplier Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="contact_name">Contact Name:</label>
        <input type="text" id="contact_name" name="contact_name">
        
        <label for="contact_email">Contact Email:</label>
        <input type="email" id="contact_email" name="contact_email">
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">
        
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>
        
        <button type="submit">Save Supplier</button>
    </form>
    
    <h2>Suppliers List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'list_suppliers.php'; ?>
        </tbody>
    </table>
    
    <script>
        function editSupplier(id, name, contact_name, contact_email, phone, address) {
            document.getElementById('supplier_id').value = id;
            document.getElementById('name').value = name;
            document.getElementById('contact_name').value = contact_name;
            document.getElementById('contact_email').value = contact_email;
            document.getElementById('phone').value = phone;
            document.getElementById('address').value = address;
        }
    </script>

    </div>
</body>
</html>