<?php
include 'dbconfig.php';

// Prepare and execute query
$stmt = $conn->prepare("SELECT * FROM grocery_items");
$stmt->execute();

// Fetch all records as associative array
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display using <pre> tag for formatting
echo "<pre>";
print_r($result);
echo "</pre>";
?>
