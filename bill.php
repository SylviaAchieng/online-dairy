<?php
include('connection.php');
?>

<?php

// Your PHP code for database connection and data insertion here (as provided in the previous examples)
$ratePerLiter = 50; // Example rate set at 50 currency units per liter

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $date = $_POST['date'];
    $morningMilk = $_POST['morning_milk'];
    $eveningMilk = $_POST['evening_milk'];

    $totalMilk = $morningMilk + $eveningMilk;
    $billAmount = $totalMilk * $ratePerLiter;

    $sql = "INSERT INTO bill (date, morning_milk, evening_milk, total_milk, bill_amount) VALUES ('$date', '$morningMilk', '$eveningMilk', '$totalMilk', '$billAmount')";

    if ($conn->query($sql) === TRUE) {
        echo "Records added successfully! Bill amount: " . $billAmount . " currency units";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter Daily Milk Records</title>
    <style>
        form{
            max-width: 60rem;
            margin: 1rem auto;
            text-align: center;
            margin-bottom: 3rem;
        }
        .form-box{
                max-width: 400px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }
            h2 {
               margin-top: 15px;
            }
            .btn{
                align-items: center;
                padding: 8px 20px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 6px;
                cursor: pointer;
            }
            .btn:hover{
                box-shadow: none;
            }
    </style>
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-box">
    <h2>Enter Daily Milk Records</h2>
        Date: <input type="date" name="date" required><br><br>
        Farmer's Id Number: <input type="number" step="0.01" name="id" required><br><br>
        Morning Milk (in liters): <input type="number" step="0.01" name="morning_milk" required><br><br>
        Evening Milk (in liters): <input type="number" step="0.01" name="evening_milk" required><br><br>
        <input class="btn" type="submit" name="submit" value="Calculate Bill">
    </dv>
    </form>
    <?php
    // Display the bill amount if it has been calculated
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        echo "<h3>Calculated Bill Amount</h3>";
        echo "Bill amount: " . $billAmount . " currency units";
    }
    ?>
</body>
</html>
