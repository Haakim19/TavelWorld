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
    $stmt 
} catch (\Throwable $th) {
    //throw $th;
}
