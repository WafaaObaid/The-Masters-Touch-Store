<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db = getenv("DB_NAME");

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Database connection failed");
}
?>