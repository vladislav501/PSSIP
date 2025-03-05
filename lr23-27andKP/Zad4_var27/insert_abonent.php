<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $birth_date = $_POST["birth_date"];
    $phone = $_POST["phone"];
    $passport_number = $_POST["passport_number"];

    $sql = "INSERT INTO abonenty (last_name, first_name, birth_date, phone, passport_number) 
            VALUES ('$last_name', '$first_name', '$birth_date', '$phone', '$passport_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Абонент успешно добавлен!";
    } else {
        echo "Ошибка: " . $conn->error;
    }

    echo '<br><a href="add_abonent.php">Добавить еще</a> | <a href="view_abonents.php">Посмотреть всех абонентов</a>';
}

$conn->close();
?>
