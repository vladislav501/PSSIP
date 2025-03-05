<?php
// Получение данных формы
$to = "tvorovskijvlad@gmail.com";  // Получатель
$subject = "Тема письма";        // Тема письма
$message = "Привет, это тестовое письмо!"; // Текст письма
$headers = "From: sender@example.com";  // От кого

// Отправка письма
if(mail($to, $subject, $message, $headers)) {
    echo "Письмо отправлено успешно!";
} else {
    echo "Ошибка при отправке письма.";
}
?>