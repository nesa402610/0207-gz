<?php
header('Content-Type: text/html; charset=utf-8');
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "Имя: $firstname <br>";
echo "Фамилия: $lastname <br>";
echo "E-mail: $email <br>";
echo "Пароль: $password <br>";