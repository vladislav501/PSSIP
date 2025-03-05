<?php
require "db.php";

$sql = "SELECT * FROM abonenty";
$result = $conn->query($sql);

echo "<h2>Список абонентов</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Телефон</th>
            <th>Номер паспорта</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['birth_date']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['passport_number']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Нет данных</td></tr>";
}

echo "</table>";

$conn->close();
?>