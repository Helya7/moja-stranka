<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $firstName = htmlspecialchars($_POST["first_name"]);
    $lastName = htmlspecialchars($_POST["last_name"]);
    $email = htmlspecialchars($_POST["email"]);

    // Проведите дополнительную валидацию данных, если необходимо
    // Например, проверка формата электронной почты

    // Подготовка данных для отправки или сохранения в базу данных
    $orderData = "Имя: $firstName\nФамилия: $lastName\nEmail: $email";

    // Здесь вы можете добавить код для отправки электронной почты,
    // сохранения данных в базу данных или других необходимых действий.

    // Пример отправки электронной почты (раскомментируйте, если используется)
    /*
    $to = "ваш_адрес_почты@example.com";
    $subject = "Новый заказ продукта";
    $headers = "From: $email";

    mail($to, $subject, $orderData, $headers);
    */

    // Ответ пользователю
    echo "Ďakujeme za vašu objednávku!";
}
?>