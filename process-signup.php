<?php

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (name, email, phone_number, address, pincode, password_hash)
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("ssisis",
                  $_POST["name"],
                  $_POST["email"],
                  $_POST["phone_number"],
                  $_POST["address"],
                  $_POST["pincode"],
                  $password_hash);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
    
}
?>








