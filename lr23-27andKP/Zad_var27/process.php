<?php
session_start(); // Запуск сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $_SESSION["user_email"] = htmlspecialchars($_POST["email"]);
    $_SESSION["user_password"] = htmlspecialchars($_POST["password"]);
    $_SESSION["user_info"] = htmlspecialchars($_POST["info"]);
    $_SESSION["user_subscribe"] = isset($_POST["subscribe"]) ? "Да" : "Нет";

    echo "<h2>Вы успешно зарегистрированы!</h2>";
    echo "<p><strong>Email:</strong> " . $_SESSION["user_email"] . "</p>";
    echo "<p><strong>Пароль:</strong> " . $_SESSION["user_password"] . "</p>"; 
    echo "<p><strong>Информация о себе:</strong> " . $_SESSION["user_info"] . "</p>";
    echo "<p><strong>Подписка на рассылку:</strong> " . $_SESSION["user_subscribe"] . "</p>";

    echo '<br><a href="session2.php">Перейти к проверке данных в сессии</a>';
} else {
    echo "Ошибка: данные не переданы!";
}
?>
