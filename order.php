<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST["first_name"]);
    $lastName = htmlspecialchars($_POST["last_name"]);
    $email = htmlspecialchars($_POST["email"]);

    $orderData = "Имя: $firstName\nФамилия: $lastName\nEmail: $email";

    echo "Ďakujeme za vašu objednávku!";
}
?>