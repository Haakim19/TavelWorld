<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "dataBase.con.php"; //connecting to the database 

    $fullName = htmlspecialchars($_POST["FullName"]);
    $email = htmlspecialchars($_POST["Email"]);
    $password = htmlspecialchars($_POST["Password"]);
    $package = htmlspecialchars($_POST["tour-packages"]);
}
try {
    $sql = "INSERT INTO enquiries (FullName, Email, Pwd, Package) VALUES ('$fullName', '$email', '$password', '$package')";
    $stmt = $conn->prepare($sql);
} catch (\Throwable $th) {
    //throw $th;
}
