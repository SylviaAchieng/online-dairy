<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <style>
        /* Your CSS styles for payment form */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 50px auto;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Make Payment</h2>
        <form action="payment.php" method="post">
            <label for="product">Product:</label>
            <input type="text" id="product" name="product" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            
            <input type="submit" value="Submit Payment">
        </form>
    </div>

    <?php
    require_once 'connection.php';
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the selected product and quantity from the form
        $selectedProduct = $_POST['product'];
        $quantity = $_POST['quantity'];

        // Retrieve price per product from the database based on the selected product
        // ... (Database connection and query to fetch product price)
        $sql = "SELECT price_per_product FROM tbproduct WHERE product_name = '$selectedProduct'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pricePerProduct = $row["price_per_product"];

        // Calculate the total payment
        $totalPayment = $pricePerProduct * $quantity;

        // Simulate a successful payment confirmation message
        echo "Payment successful! Total amount to pay for $quantity $selectedProduct(s) is: $" . number_format($totalPayment, 2);

        // Redirect to payment gateway with the phone number (simulated redirect, adjust as per your payment gateway integration)
        header("refresh:3; url=https://paymentgateway.com?phone=0758753157");


        // Simulate sending a payment request/notification using M-Pesa API (replace with actual M-Pesa API logic)
        $userPhoneNumber = "0758753157"; // Replace with the user's actual phone number
        $notificationMessage = "Dear user, please make a payment of KES " . number_format($totalPayment, 2) . " to complete your purchase. Enter your M-Pesa PIN.";

       // Replace this with your actual M-Pesa API request to send payment notification
      // Here, we are using a function `sendPaymentNotification()` as a placeholder
        sendPaymentNotification($userPhoneNumber, $notificationMessage);


        // Redirect to the home page after 3 seconds (you can change the URL)
        header("refresh:3; url=main.php");
    }
}
    ?>
</body>
</html>
