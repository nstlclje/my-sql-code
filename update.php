<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare the SQL statement
$sql = "UPDATE Students SET student_name = :name, student_email = :email WHERE student_id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':id', $student_id);
$stmt->bindParam(':name', $student_name);
$stmt->bindParam(':email', $student_email);

// Sample data to update
$student_id = 1; // ID of the student to update
$student_name = "Nestle Martin Celaje"; // New name
$student_email = "nestlecelaje@gmail.com"; // New email

// Execute the statement
$stmt->execute();
echo "Student record updated successfully!";
?>


