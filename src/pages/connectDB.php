<?php

$host = getenv("DB_HOST") ?: "localhost";
$user = getenv("DB_USER") ?: "root";
$pass = getenv("DB_PASS") ?: "12345";
$db = getenv("DB_NAME") ?: "masterstouchstore";

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Database connection failed");
}
?>