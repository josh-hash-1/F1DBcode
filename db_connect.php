<?php
// Database credentials
$host = "10.70.210.249"; // use local IP
$dbname = "f1_db";
$username = "worker"; // Worker
$password = "worker";
try {
// Create PDO connection
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
// Set error mode to exceptions
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
die("Connection failed: " . $e->getMessage());
}
?>