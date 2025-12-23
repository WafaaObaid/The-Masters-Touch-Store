<?php
session_start();
include "connectDB.php";

if ($connection->error) {
    die("DB Error");
}

if (isset($_POST["Save"])) {

    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $gender   = trim($_POST["gender"]);

    $sql = "INSERT INTO users (name, email, password, gender)
            VALUES ('$name', '$email', '$password', '$gender')";

            if ($connection->query($sql) === true) {
            $_SESSION["authUser"] = [
                "name"  => $name,
                "email" => $email
            ];

        header("Location: Homepage.php");
        exit;
    } else {
        echo "Error: " . $connection->error;
    }
}
