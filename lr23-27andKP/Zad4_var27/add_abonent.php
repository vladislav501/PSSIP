<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление абонента</title>
</head>
<body>
    <h2>Добавить нового абонента</h2>
    <form action="insert_abonent.php" method="POST">
        <label>Фамилия:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Имя:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Дата рождения:</label><br>
        <input type="date" name="birth_date" required><br><br>

        <label>Телефон:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Номер паспорта:</label><br>
        <input type="text" name="passport_number" required><br><br>

        <button type="submit">Добавить</button>
    </form>
    <br>
    <a href="view_abonents.php">Посмотреть всех абонентов</a>
</body>
</html>
