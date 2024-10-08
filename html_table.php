<?php
// Include the database configuration file
include 'dbconfig.php';

// Prepare and execute the query
$stmt = $pdo->query("SELECT * FROM Students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display results in an HTML table
echo "<table border='1'>
<tr>
<th>Student ID</th>
<th>Name</th>
<th>Email</th>
<th>Enrollment Date</th>
</tr>";

foreach ($students as $student) {
    echo "<tr>
    <td>{$student['student_id']}</td>
    <td>{$student['student_name']}</td>
    <td>{$student['student_email']}</td>
    <td>{$student['enrollment_date']}</td>
    </tr>";
}

echo "</table>";
?>


