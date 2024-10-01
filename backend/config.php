<?php
$host = 'localhost';
$db = 'coop_mall_db'; // My Database 
$user = 'root';  // Your MySQL username
$password = '';  // Your MySQL password

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
