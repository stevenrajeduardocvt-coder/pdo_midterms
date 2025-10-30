<?php
include 'dbconfig.php';

// SQL delete statement
$sql = "DELETE FROM grocery_items WHERE id = 2";
$conn->exec($sql);

echo "🗑️ Record deleted successfully!";
?>
