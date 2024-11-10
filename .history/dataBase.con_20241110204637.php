<?php
// $dsn = "mysql : host = localhost ; dbname = sri_lanka_tourism";
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sri_lanka_tourism";

try {
    $conn = mysqli_connect($host, $username, $password, $dbname);
    echo "Connected Successfully";
    echo "<br>";
} catch (Exception $e) {
    echo "Connection Error: " . $e->getMessage();
}
