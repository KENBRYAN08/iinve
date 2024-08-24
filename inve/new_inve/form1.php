<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 20px;
}
form {
    max-width: 400px;
    margin: auto;
}
label {
    display: inline-block;
    width: 150px;
}
input {
    width: calc(100% - 160px);
}
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
            background-color: gray;
        }
    </style>
</head>
<body>

    <div id="sidebar">
        <h2>Inventory System</h2>
        <a href="form2.php">Dashboard</a>
        <a href="index.html" onclick="showHome()">Add Product</a>
        <a href="form1.php">Form1</a>
        <a href="form3.php">Form3</a>
        <a href="form4.php">Form4</a>
        <a href="form5.php">Form5</a>
        <a href="logout.php">LOGOUT</a>
        <!-- Additional sidebar links can be added here -->
    </div>
    <h1>Add New Product</h1>
    <form action="form.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="sku">SKU:</label>
        <input type="text" id="sku" name="sku" required><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>
        
        <label for="supplier">Supplier:</label>
        <input type="text" id="supplier" name="supplier" required><br><br>
        
        <input type="submit" value="Add Product">
    </form>
</body>
</html>