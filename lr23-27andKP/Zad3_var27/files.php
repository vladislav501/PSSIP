<?php
// Определяем переменные
$a = 59;
$b = 7;

// Вычисляем сумму и частное
$sum = $a + $b;
$division = $a / $b;

// Создаем строку с результатами
$result = "Сумма: $sum\nЧастное: $division\n";

// Записываем в файл 1.txt
$file = "1.txt";
file_put_contents($file, $result);

// Выводим сообщение об успешной записи
echo "Результаты успешно записаны в файл <strong>$file</strong>.<br>";
echo '<a href="read_file.php">Посмотреть содержимое файла</a>';
?>
