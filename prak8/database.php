<?php
// Abdi Maskur Mutaqin
// 121140034
// Pemweb RC

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prak8";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
