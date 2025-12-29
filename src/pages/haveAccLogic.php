<?php
session_start();
include __DIR__ . '/../connectDB.php';



if ($connection->error == false) {
    if (isset($_POST["login"])) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $connection->query($sql);

        if ($result && $result->num_rows > 0) {
            $data = $result->fetch_assoc();

            if ($data["password"] === $password) {
                $_SESSION["authUser"] = $data;
                header("Location: Homepage.php");
                exit();
            } else {
                echo "Password incorrect!";
            }

        } else {
            echo "Login fail: email not found!";
        }
    }
}
