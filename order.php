
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        form{
            max-width: 60rem;
            margin: 1rem auto;
            text-align: center;
            margin-bottom: 3rem;

            }
        .container{
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
                display: inline-block;
                
            }
            div{
                margin-bottom: 15px;
            }

        input[type=text], input[type=number], input[type=email] {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        align-items: center;
      }
      h2{
        text-align: center;
      }

      /* Set a style for all buttons */
      button {
        align-items: center;
        padding: 8px 20px;
        background-color: green;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
      }

      button:hover {
        opacity: 0.8;
      }
    </style>
</head>
<body>
<?php
require_once 'connection.php';

include 'product.php';
// Process the submitted order
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Here you would typically validate and sanitize the input data

    // Example: Save the order to a file or database (database setup not included)

    if (in_array($product, $products)) {
        // Product exists, order placed successfully
        echo "Order placed successfully! Redirecting to payment page...";

        // Redirect the user to the payment page (replace payment.php with the actual payment page)
        header("refresh:3; url=payment.php?phone=0758753157"); // Redirect after 3 seconds
        exit();
    } else {
        // Product does not exist
        echo "Product not found. Please try again.";
    }
    // File handling example:
    $orderInfo = "Product: $product, Quantity: $quantity, Name: $name, Email: $email\n";
    file_put_contents('orders.txt', $orderInfo, FILE_APPEND);
    exit();
}
?>





    <div class="container">
        <h2>Place Your Order</h2>
        <form action="" method="post">
            
            <label for="product">Product:</label>
            <input type="text" id="product" name="product" required>
            <br>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            <br>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <button type="submit" value="Place Order">Place Order</button>
        </form>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
