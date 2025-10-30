<?php
include 'dbconfig.php';

// Prepare query for one specific record
$stmt = $conn->prepare("SELECT * FROM grocery_items WHERE id = 1");
$stmt->execute();

// Fetch single record
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";
?>
