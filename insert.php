<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare the SQL statement
$sql = "INSERT INTO Students (student_id, student_name, student_email, enrollment_date) VALUES (:id, :name, :email, :enrollment_date)";

$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':id', $student_id);
$stmt->bindParam(':name', $student_name);
$stmt->bindParam(':email', $student_email);
$stmt->bindParam(':enrollment_date', $enrollment_date);

// Sample data to insert
$student_id = 21; // Unique student ID
$student_name = "Andrea Brillantes"; // Student's name
$student_email = "andreabrillantes@example.com"; // Student's email
$enrollment_date = '2024-01-01'; // Enrollment date

// Execute the statement
$stmt->execute();
echo "New student record created successfully!";
?>



