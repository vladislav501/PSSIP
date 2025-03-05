<?php
// Объявление константы NUM_E
define("NUM_E", 2.71828);

// Вывод значения константы
echo "Число e равно " . NUM_E . "<br>";

// Присвоение значения константы переменной
$num_e1 = NUM_E;

// Отображение типа переменной
echo "Тип переменной num_e1: " . gettype($num_e1) . "<br>";

// Преобразование типа переменной
$num_e1 = (string)$num_e1; // Строка
echo "Тип: " . gettype($num_e1) . "; Значение: $num_e1<br>";

$num_e1 = (int)$num_e1; // Целое
echo "Тип: " . gettype($num_e1) . "; Значение: $num_e1<br>";

$num_e1 = (bool)$num_e1; // Булевский
echo "Тип: " . gettype($num_e1) . "; Значение: " . ($num_e1 ? "true" : "false") . "<br>";
?>
