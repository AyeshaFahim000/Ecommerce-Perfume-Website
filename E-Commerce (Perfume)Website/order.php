<?php
include('connection.php');

// Fetch orders from the database
$orderResult = $conn->query("SELECT * FROM `order`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Orders</h2>

    <!-- Display orders in a table -->
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Payment Method</th>
            <th>Rider ID</th>
            <!-- Add more columns as needed -->
        </tr>
        <?php
        while ($row = $orderResult->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['order_date']}</td>
                    <td>{$row['payment_method']}</td>
                    <td>{$row['rider_id']}</td>
                    <!-- Add more columns as needed -->
                  </tr>";
        }
        ?>
    </table>

    <!-- Add more HTML content or links for managing orders as needed -->

    <a href="admin.php">Back to Admin Panel</a>
</body>

</html>
