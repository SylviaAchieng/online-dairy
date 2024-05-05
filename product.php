<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dairy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve available products from the database
$sql = "SELECT product_name FROM tbproduct";
$result = $conn->query($sql);

$products = array();

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch products and add them to the products array
    while ($row = $result->fetch_assoc()) {
        $products[] = $row['product_name'];
    }
}

// Close the database connection
$conn->close();

// Available products array
$availableProducts = array("Butter", "Cheese", "Yogurt", "Fresh Milk", "Mala", "Canned"); // Products not found in the database

// Merge the products retrieved from the database with the predefined products
$mergedProducts = array_merge($products, $availableProducts);

// Remove duplicates and maintain the order
$finalProducts = array_unique($mergedProducts, SORT_REGULAR);

// Output the final products array
//print_r($finalProducts);
?>
