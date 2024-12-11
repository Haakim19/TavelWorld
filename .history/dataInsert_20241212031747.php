<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "dataBase.con.php"; // Connecting to the database

    // Sanitizing input data
    $fullName = htmlspecialchars($_POST["FullName"]);
    $email = htmlspecialchars($_POST["Email"]);
    $phoneNumber = htmlspecialchars($_POST["PhoneNumber"]);
    $package = htmlspecialchars($_POST["tour-packages"]);
    $feedBack = htmlspecialchars($_POST["msg"]);

    try {
        // Prepare and bind parameters to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO enquiries (fullName, email, phoneNumber, package, feedback) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullName, $email, $phoneNumber, $package, $feedBack);

        // Execute the statement
        if ($stmt->execute()) {

            $_SESSION['alert'] = 'Data inserted successfully';
        } else {
            $_SESSION['alert'] = 'Error: ' . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $_SESSION['alert'] = 'Error: ' . $e->getMessage();
    }
    header(("Location: Enquiry.html"));
    exit();
}
