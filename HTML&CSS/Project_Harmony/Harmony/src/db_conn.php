<?php

require_once "connector.php";


//$db = new Database("127.0.0.1:3306", "root", "root", "vladyslavshusharin");

$host = $_ENV['DB_HOST'] ?? getenv('DB_HOST');
$user = $_ENV['DB_USER'] ?? getenv('DB_USER');
$pass = $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD');
$db = $_ENV['DB_NAME'] ?? getenv('DB_NAME');
$port = (int)($_ENV['DB_PORT'] ?? getenv('DB_PORT'));

$db = new Database ($host, $user, $pass, $db, $port);



?>







