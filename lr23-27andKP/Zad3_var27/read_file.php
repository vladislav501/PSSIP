<?php
$file = "1.txt";

if (file_exists($file)) {
    // Читаем файл и выводим содержимое
    $content = file_get_contents($file);
    echo "<h2>Содержимое файла 1.txt:</h2>";
    echo "<pre>$content</pre>";
} else {
    echo "Файл не найден!";
}

echo '<br><a href="files.php">Пересчитать заново</a>';
?>
