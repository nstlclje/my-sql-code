<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare the SQL statement
$sql = "DELETE FROM Students WHERE student_id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameter
$stmt->bindParam(':id', $student_id);

// Sample ID to delete
$student_id = 21; // ID of the student to delete

// Execute the statement
$stmt->execute();
echo "Student record deleted successfully!";
?>


