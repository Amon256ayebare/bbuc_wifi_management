<?php
require 'db.php';

$email = "amonayebare02@gmail.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT OR IGNORE INTO admins (email, password) VALUES (?, ?)");
$stmt->execute([$email, $password]);

echo "Admin user created";


