<?php
$host = "localhost";
$user = "root"; // default for Laragon/XAMPP
$pass = "";
$dbname = "job_portal";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
