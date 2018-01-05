<?php

echo "<html><h1>PROJECT 2</h1>";

try {
    $db = new PDO('mysql:host=db;dbname=database;charset=utf8mb4', 'admin', 'test');
    echo "Succesfully connected to MySQL";
} catch(PDOException $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
}