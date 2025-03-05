<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form action="process.php" method="POST">
        <label>Ваш логин (email):</label><br>
        <input type="email" name="email" required><br><br>

        <label>Пароль:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Информация о себе:</label><br>
        <textarea name="info"></textarea><br><br>

        <label>
            <input type="checkbox" name="subscribe" value="1"> Подписаться на рассылку
        </label><br><br>

        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>
