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




.container {
    max-width: 800px;
    height:500px;
    width: 500px;
    margin:center;
    margin-left:500px;
    margin-top:10px;
    background: white;
    padding: 60px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

h1 {
    text-align: center;
    color: #000;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #000;
    
}

input[type="text"], textarea {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #000;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #575757;
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


    <div class="container">
        <h1>Add Category</h1>
        <form action="add_category.php" method="POST">
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" placeholder="Category Name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Add Description"></textarea>

            <button type="submit">Add Category</button>
        </form>
    </div>>
</body>
</html>