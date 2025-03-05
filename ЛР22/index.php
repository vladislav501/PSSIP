<?php

// Задание 1: Использование оператора включения include
// Здесь можно включить другие файлы, если они есть, например:
include 'ex1.php';
include 'ex2.php';
include 'ex3.php';
include 'ex4.php';
include 'ex5.php';

// Задание 2: Работа с датой, временем, календарем
$date = mktime(0, 0, 0, 2, 12, 2025);
$formattedDate = date("d.m.Y", $date);
echo "<p>Дата: $formattedDate</p>";

// Задание 3: Работа с операторами организации циклов
$variantNumber = 7; 
$count = 0;
do {
    echo "<p>Творовский Влад</p>"; 
    $count++;
} while ($count < $variantNumber + 5);

// Задание 4: Работа с массивами
$students = [
    "Иванов" => 200,
    "Петров" => 340,
    "Сидоров" => 800
];

echo "<h3>Стипендии студентов:</h3>";
$totalScholarship = 0;

foreach ($students as $name => $scholarship) {
    echo "<p>$name: $scholarship</p>";
    $totalScholarship += $scholarship;
}

echo "<p>Суммарная стипендия: $totalScholarship</p>";

// Задание 5: Работа со строками
$s1 = "Творовский"; 
$s2 = "Южная 17"; 

$lengthS2 = strlen($s2);
$reversedS1 = strrev($s1);
$lowercaseS2 = strtolower($s2);

echo "<p>Длина строки S2: $lengthS2</p>";
echo "<p>S1 в обратном порядке: $reversedS1</p>";
echo "<p>S2 в нижнем регистре: $lowercaseS2</p>";

// Задание 6: Пользовательская функция с новой формулой
function calculate($x) {
    // Проверка на ноль в знаменателе
    $denominator = 3 * $x + pow(2, $x);
    
    if ($denominator == 0) {
        return "Ошибка: деление на ноль.";
    }

    // Формула расчета
    return (4 * $x) / $denominator;
}

// Пример вызова функции
$x = 2; // замените на ваше значение
$result = calculate($x);

echo "<p>Результат расчета для x = $x: $result</p>";

?>