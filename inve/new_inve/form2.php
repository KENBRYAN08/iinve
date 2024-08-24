<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<style>
/* Basic Reset */
body {
    background-image: url("image/pic1.jpg");
}

body, h1, h2, p, textarea, button {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

/* Container for sidebar and main content */
.container {
    display: flex;
    height: 100vh;
}


/* Main Content Styles */
.main-content {
    margin-left: 250px;
    padding: 20px;
    flex: 1;
}

.header {
    background-color: #ecf0f1;
    padding: 10px 20px;
    border-bottom: 1px solid #bdc3c7;
}

.content {
    margin-top: 20px;
}

label {
    color: #ffff;
}

/* Form Styling */
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

/* Saved Data Styling */
.saved-data {
    margin-top: 20px;
    padding: 10px;
    background-color: #f1c40f;
    border-radius: 5px;
    border: 2px solid #000;
}

.entry {
    padding:20px;
    margin-bottom: 15px;
    border: 2px solid #000;
}

.entry small {
    display: block;
    color: #7f8c8d;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        position: relative;
        height: auto;
    }
    
    .main-content {
        margin-left: 0;
    }
}

/*sidebar*/
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
        <div class="main-content">
            <header class="header">
                <h1>Welcome to the Dashboard <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            </header>
            <section class="content">
                <form action="save.php" method="post">
                    <label for="data">Type something:</label>
                    <textarea id="data" name="data" rows="4" cols="50" required></textarea><br>
                    <button type="submit">Save</button>
                </form>
                <div class="saved-data">
                    <?php
                    include 'config.php';
                    
                    $sql = "SELECT data, created_at FROM entries ORDER BY created_at DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="entry">';
                            echo '<p>' . nl2br(htmlspecialchars($row['data'])) . '</p>';
                            echo '<small>' . $row['created_at'] . '</small>';
                            echo '</div>';
                        }
                    } else {
                        echo "<p>No data available.</p>";
                    }
                    
                    $conn->close();
                    ?>
                </div>
            </section>
        </div>
    </div>
</body>
</html>