<?php
include 'dbconfig.php';

// SQL update statement
$sql = "UPDATE grocery_items SET price = 60.00 WHERE id = 1";
$conn->exec($sql);

echo "✏️ Record updated successfully!";
?>
