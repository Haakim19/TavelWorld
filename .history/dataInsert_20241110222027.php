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

            echo "<script>window.alert('Data inserted successfully');</script>";
            // header("Location:Enquiry.html");
        } else {
            echo "<script>window.alert('Error: " . addslashes($stmt->error) . "');</script>";
            // header("Location:Enquiry.html");
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "<script>window.alert('Error: " . addslashes($e->getMessage()) . "');</script>";
        // header("Location:Enquiry.html");
    }
}
