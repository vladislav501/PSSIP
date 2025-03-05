<?php
session_start(); // Запуск сессии

if (isset($_SESSION["user_email"])) {
    echo "<h2>Данные из сессии:</h2>";
    echo "<p><strong>Email:</strong> " . $_SESSION["user_email"] . "</p>";
    echo "<p><strong>Пароль:</strong> " . $_SESSION["user_password"] . "</p>";
    echo "<p><strong>Информация о себе:</strong> " . $_SESSION["user_info"] . "</p>";
    echo "<p><strong>Подписка на рассылку:</strong> " . $_SESSION["user_subscribe"] . "</p>";
} else {
    echo "Данные в сессии отсутствуют!";
}

// Вывод имени и идентификатора сессии
echo "<br>Имя сессии: " . session_name();
echo "<br>Идентификатор сессии: " . session_id();

echo '<br><a href="index.php">Вернуться на главную</a>';
?>