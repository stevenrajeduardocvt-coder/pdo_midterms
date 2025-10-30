<?php
include 'dbconfig.php';

// SQL insert statement
$sql = "INSERT INTO grocery_items (item_name, category, quantity, price)
        VALUES ('Toothpaste', 'Toiletries', 8, 55.00)";

$conn->exec($sql);

echo "✅ Record inserted successfully!";
?>
