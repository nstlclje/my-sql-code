<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare and execute the query
$stmt = $pdo->query("SELECT * FROM Students");

// Fetch all results
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the results using print_r within <pre> tags for readability
echo "<pre>";
print_r($students);
echo "</pre>";
?>




