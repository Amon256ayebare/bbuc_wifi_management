<?php
require 'db.php';

echo "<h3>Database file in use:</h3>";
echo realpath(__DIR__ . "/database.db") . "<br><br>";

$tables = $pdo->query("
    SELECT name FROM sqlite_master WHERE type='table'
")->fetchAll(PDO::FETCH_COLUMN);

echo "<h3>Tables found:</h3>";
echo "<pre>";
print_r($tables);
echo "</pre>";
