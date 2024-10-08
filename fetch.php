<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare and execute the query
$stmt = $pdo->query("SELECT * FROM Students WHERE student_id = 1");

// Fetch one result
$student = $stmt->fetch(PDO::FETCH_ASSOC);

// Display the result using print_r within <pre> tags for readability
echo "<pre>";
print_r($student);
echo "</pre>";
?>





