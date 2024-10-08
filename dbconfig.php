<?php
// Database configuration
$host = "localhost"; // Database host
$user = "root"; // Database username
$password = ""; // Database password
$dbname = "celaje"; // Database name
$dsn = "mysql:host={$host};dbname={$dbname}"; // Data Source Name

// Create a new PDO instance
try {
    $pdo = new PDO($dsn, $user, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set the timezone
    $pdo->exec("SET time_zone = '+08:00';");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>



