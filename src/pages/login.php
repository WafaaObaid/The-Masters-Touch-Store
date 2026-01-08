<?php
session_start();

require_once __DIR__ . '/connectDB.php';

if (!isset($connection) || $connection->connect_error) {
    die("DB connection variable not found");
}


if ($connection->error) {
    die("DB Error");
}

if (isset($_POST["Save"])) {

    $name = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $gender = trim($_POST["gender"]);

    $sql = "INSERT INTO users (username, email, password, gender)
            VALUES ('$name', '$email', '$password', '$gender')";

    if ($connection->query($sql) === true) {
        $_SESSION["authUser"] = [
            "username" => $name,
            "email" => $email
        ];

        header("Location: /pages/Homepage.php");
        exit;
    } else {
        echo "Error: " . $connection->error;
    }
}
