<?php
$servername = "localhost";
$username = "admin";          // 🔥 แก้จาก root เป็น admin (ตาม terraform)
$password = "password123";    // 🔥 แก้จาก "" เป็น password123 (ตาม terraform)
$dbname = "sports_db";        // 🔥 แก้จาก sports_rental_system เป็น sports_db (ตาม terraform)
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>