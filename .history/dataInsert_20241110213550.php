<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "dataBase.con.php"; // Connecting to the database

    // Sanitizing input data
    $fullName = htmlspecialchars($_POST["FullName"]);
    $email = htmlspecialchars($_POST["Email"]);
    $phoneNumber = htmlspecialchars($_POST["PhoneNumber"]);
    $package = htmlspecialchars($_POST["tour-packages"]);

    try {
        // Prepare and bind parameters to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO enquiries (FullName, Email, Pwd, Package) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullName, $email, $phoneNumber, $package);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>window.alert('Data inserted successfully');</script>";
        } else {
            echo "<script>window.alert('Error: " . addslashes($stmt->error) . "');</script>";
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "<script>window.alert('Error: " . addslashes($e->getMessage()) . "');</script>";
    }
}
