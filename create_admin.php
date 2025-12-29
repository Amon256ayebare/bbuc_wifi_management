<?php
require 'db.php';

$email = "amonayebare02@gmail.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO admins (email, password) VALUES (?, ?)");
$stmt->execute([$email, $password]);

echo "Admin created successfully";
