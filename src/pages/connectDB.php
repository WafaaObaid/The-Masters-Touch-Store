<?php

$connection = new mysqli(
    "db",
    "root",
    "12345",
    "masterstouchstore"
);

if ($connection->connect_error) {
    die("Database connection failed");
}
?>