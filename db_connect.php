<?php
// Database credentials
$host = "localhost"; // use local IP
$dbname = "f1_db";
$username = "root"; // Worker
$password = ""; // joshIsFat
try {
// Create PDO connection
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
// Set error mode to exceptions
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
die("Connection failed: " . $e->getMessage());
}
?>