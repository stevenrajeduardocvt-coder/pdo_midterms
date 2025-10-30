<?php
include 'dbconfig.php';

// Fetch all records
$stmt = $conn->prepare("SELECT * FROM grocery_items");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items</title>
</head>
<body>
    <h2>🛒 Grocery Items Table</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['item_name'] ?></td>
            <td><?= $item['category'] ?></td>
            <td><?= $item['quantity'] ?></td>
            <td><?= $item['price'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
