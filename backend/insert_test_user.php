<?php
// Include the database connection
include 'config.php';

// Prepare the test user details
$email = 'testuser@coopmall.com';
$password = password_hash('password123', PASSWORD_DEFAULT); // Hash the password for security

// Insert the test user into the database
try {
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo "Test user inserted successfully!";
} catch (PDOException $e) {
    echo "Error inserting test user: " . $e->getMessage();
}
?>
