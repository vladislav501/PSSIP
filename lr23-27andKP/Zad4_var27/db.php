<?php
$host = "localhost";
$user = "root";
$password = "andromeda290745";
$dbname = "telefonny_uzel";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
